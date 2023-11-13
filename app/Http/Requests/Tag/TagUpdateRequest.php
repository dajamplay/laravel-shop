<?php

namespace App\Http\Requests\Tag;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TagUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                Rule::unique('tags', 'title')->ignore($this->tag)
            ],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
        ];
    }
}
