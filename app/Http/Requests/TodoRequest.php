<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // 認証が不要な場合はtrueを返す
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255', 
            'detail' => 'nullable|string|max:500',
            'due_date' => 'required|date|after_or_equal:today',
            'status' => 'required|in:1,2,3',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'title.max' => 'タイトルは50文字以内で入力してください。',
            'detail.max' => '詳細は500文字以内で入力してください。',
            'due_date.required' => '期日は必須です。',
            'due_date.after_or_equal' => '期日は今日以降の日付を選択してください。',
            'status.required' => '状態を選択してください。',
            'status.in' => '状態は「未着手」「着手中」「完了」から選択してください。',
        ];
    }
}
