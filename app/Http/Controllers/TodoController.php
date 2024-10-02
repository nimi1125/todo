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
        // バリデーション済みのデータを利用してTodoを作成
        Todo::create($request->except('_token'));

        // リダイレクトしてTodoの一覧ページを表示
        return redirect()
            ->route('todo.index');
    }
}
