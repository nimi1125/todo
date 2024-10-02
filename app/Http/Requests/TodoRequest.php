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
            'title' => 'required|string|max:255', // タイトルの必須ルール
            'description' => 'nullable|string',   // 説明は任意
        ];
    }
}
