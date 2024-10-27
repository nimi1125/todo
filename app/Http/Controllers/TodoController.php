<?php
namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoRequest; // バリデーションリクエストクラスをインポート
use Illuminate\Http\Request;

class TodoController extends Controller
{
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
        $todo = todo::findOrFail($id);
        $todo->delete();
        return redirect()
            ->route('todo.index')
            ->with('status','ブックマークを削除しました。');
    }

    public function edit(todo $todo)
    {
        return view('todo.create',compact('todo'));
    }

    public function update(int $id)
    {
        $todo = Todo::find($id);

        return view('todo/edit', [
            'todo' => $todo,
        ]);
    }
}
