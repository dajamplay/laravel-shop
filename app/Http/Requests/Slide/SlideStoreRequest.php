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
            'title' => ['required', 'string', 'unique:sliders,title'],
            'sale' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
            'position' => ['nullable', 'string'],
            'link' => ['nullable', 'string'],
            'slider' => ['nullable', 'string'],
        ];
    }
}
