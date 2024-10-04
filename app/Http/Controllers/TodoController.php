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

        // ビューを表示する
        return view('todo.index', compact('todos'));
    }

    public function create()
    {
        return view('todo.create'); // ビューを指定して表示
    }

    public function store(TodoRequest $request) // 修正されたリクエストクラス
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
}
