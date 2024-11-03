<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">
                <div class="bg-white shadow rounded-lg">
                    <div class="bg-gray-100 px-6 py-4 font-bold text-lg">タスク追加</div>
                    <div class="p-6">
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