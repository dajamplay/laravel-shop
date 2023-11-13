<?php

namespace App\Http\Requests\Slide;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SlideUpdateRequest extends FormRequest
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
                Rule::unique('sliders', 'title')->ignore($this->slider)
            ],
            'sale' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
            'position' => ['nullable', 'string'],
            'link' => ['nullable', 'string'],
            'slider' => ['nullable', 'string'],
        ];
    }
}
