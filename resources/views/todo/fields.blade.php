@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="errorMessage">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">タイトル</label>
    <div class="col-sm-10">
        <input type="text" name="title" value="{{ $todo->title ?? '' }}" class="form-control @error('detail') is-invalid @enderror" id="inputTitle">
    </div>
</div>

<div class="form-group row">
    <label for="inputstatus" class="col-sm-2 col-form-label">進行度</label>
    <div class="col-sm-10">
        <select id=”inputstatus” name="status" value="{{ $todo->status ?? '' }}" class="form-control">
            <option value="1">未着手</option>
            <option value="2">着手中</option>
            <option value="3">完了</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="inputdetail" class="col-sm-2 col-form-label">詳細</label>
    <div class="col-sm-10">
        <textarea name="detail" class="form-control @error('detail') is-invalid @enderror"
                  id="inputdetail" rows="5">{{ $todo->detail ?? '' }}</textarea>
    </div>
</div>

<div class="form-group row">
    <label for="inputdue_date" class="col-sm-2 col-form-label">期限</label>
    <div class="col-sm-10">
        <input type="date" name="due_date" class="form-control @error('due_date') is-invalid @enderror"
                  id="inputdue_date" rows="5">{{ $todo->due_date ?? '' }}</input>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">保存</button>
        <a href="/todo" class="btn btn-secondary">一覧へ戻る</a>
    </div>
</div>