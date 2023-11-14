<?php

namespace App\Http\Requests\Slide;

use Illuminate\Foundation\Http\FormRequest;

class SlideStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:slides,title'],
            'sale' => ['required', 'nullable', 'string'],
            'content' => ['required', 'nullable', 'string'],
            'image' => ['nullable', 'image'],
            'position' => ['required', 'nullable', 'string'],
            'link' => ['nullable', 'string'],
            'slider' => ['required', 'nullable', 'string'],
        ];
    }
}
