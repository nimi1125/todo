@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">タスク編集</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('todo.update',$todo) }}">
                            @method('PUT')
                            @csrf
                            @include('todo.fields')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection