<?php

namespace App\Http\Requests\Line;

use Illuminate\Foundation\Http\FormRequest;

class LineStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:lines,title'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
        ];
    }
}
