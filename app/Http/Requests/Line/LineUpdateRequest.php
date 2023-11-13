<?php

namespace App\Http\Requests\Line;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LineUpdateRequest extends FormRequest
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
                Rule::unique('lines', 'title')->ignore($this->line)
            ],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
        ];
    }
}
