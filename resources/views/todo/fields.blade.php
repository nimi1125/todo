@if ($errors->any())
    <div class="bg-red-100 text-red-600 p-4 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="errorMessage">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

<div class="mb-4">
    <label for="inputTitle" class="block text-gray-700 font-medium mb-2">タイトル</label>
    <input type="text" name="title" value="{{ $todo->title ?? '' }}" class="w-full border-gray-300 rounded @error('detail') border-red-500 @enderror" id="inputTitle">
</div>

<div class="mb-4">
    <label for="inputstatus" class="block text-gray-700 font-medium mb-2">進行度</label>
    <select id="inputstatus" name="status" class="w-full border-gray-300 rounded">
        <option value="1">未着手</option>
        <option value="2">着手中</option>
        <option value="3">完了</option>
    </select>
</div>

<div class="mb-4">
    <label for="inputdetail" class="block text-gray-700 font-medium mb-2">詳細</label>
    <textarea name="detail" class="w-full border-gray-300 rounded @error('detail') border-red-500 @enderror" id="inputdetail" rows="5">{{ $todo->detail ?? '' }}</textarea>
</div>

<div class="mb-4">
    <label for="inputdue_date" class="block text-gray-700 font-medium mb-2">期限</label>
    <input type="date" name="due_date" class="w-full border-gray-300 rounded @error('due_date') border-red-500 @enderror" id="inputdue_date" value="{{ $todo->due_date ?? '' }}">
</div>

<div class="flex space-x-4">
    <button type="submit" class="px-4 py-2 btn01 rounded mr-2">保存</button>
    <a href="/todo" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">一覧へ戻る</a>
</div>
