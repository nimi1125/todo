<x-app-layout>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">タスク追加</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('todo.store') }}">
                            @csrf
                            @include('todo.fields')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>