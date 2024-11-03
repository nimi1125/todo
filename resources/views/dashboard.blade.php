<x-app-layout>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">タスク</h1>
        <div class="mb-4 flex justify-first">
            <a href="{{ route('todo.create') }}" class="px-4 py-2 btn01">
                タスクを追加する
            </a>
        </div>
        <table class="min-w-full bg-white border border-gray-300 rounded">
            <thead>
                <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">タイトル</th>
                    <th class="py-3 px-6 text-left">詳細</th>
                    <th class="py-3 px-6 text-left">状態</th>
                    <th class="py-3 px-6 text-left">期限</th>
                    <th class="py-3 px-6"></th>
                    <th class="py-3 px-6"></th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach($todos as $todo)
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-6">{{ $todo->id }}</td>
                        <td class="py-3 px-6">{{ $todo->title }}</td>
                        <td class="py-3 px-6">{{ $todo->detail }}</td>
                        <td class="py-3 px-6">
                            <span class="label {{ $todo->status_class }}">{{ $todo->status_label }}</span>
                        </td>
                        <td class="py-3 px-6">{{ date('Y-m-d', strtotime($todo->due_date)) }}</td>
                        <td class="py-3 px-6">
                            <a href="{{ route('todo.edit',$todo) }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">編集</a>
                        </td>
                        <td class="py-3 px-6">
                            <form method="POST" action="{{ route('todo.destroy',$todo) }}">
                                @method('DELETE')
                                @csrf
                                <button class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-900" onclick="return confirm('本当に削除しますか？')">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>