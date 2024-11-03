<?php
namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoRequest; 
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function dashboard()
    {
        // Todoのデータを取得する処理
        $todos = Todo::all();

        return view('dashboard', compact('todos'));

    }

    public function index()
    {
        // Todoのデータを取得する処理
        $todos = Todo::all();

        return view('todo.index', compact('todos'));

    }

    public function create()
    {
        return view('todo.create'); 
    }

    public function store(TodoRequest $request) 
    {
        Todo::create($request->except('_token'));

        return redirect()
            ->route('todo.index');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()
            ->route('todo.index')
            ->with('status','ブックマークを削除しました。');
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todo.edit', compact('todo'));
    }

    public function update(TodoRequest $request, $id)
{
    $todo = Todo::findOrFail($id);
    $todo->title = $request->title;
    $todo->status = $request->status;
    $todo->detail = $request->detail;
    $todo->due_date = $request->due_date;
    $todo->save();

    return redirect()->route('todo.index')->with('status', 'ブックマークを更新しました。');
}

}
