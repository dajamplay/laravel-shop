<?php

namespace App\Http\Requests\Tag;

use Illuminate\Foundation\Http\FormRequest;

class TagStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:tags,title'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
        ];
    }
}
