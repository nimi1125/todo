@extends('layouts.app')

<div class="container mt-5">
    <h1 class="panel-heading">タスク</h1>
    <div class="panel-body">
        <div class="text-right">
            <a href="{{ route('todo.create') }}" class="btn btn-primary">
                タスクを追加する
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>詳細</th>
                <th>状態</th>
                <th>期限</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->detail }}</td>
                    <td>
                        <span class="label {{ $todo->status_class }}">{{ $todo->status_label }}</span>
                    </td>
                    <td>{{ $todo->due_date }}</td>
                    <td><a href="#" class="btn btn-secondary">編集</a></td>
                    <td><a href="#" class="btn btn-dark">削除</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>