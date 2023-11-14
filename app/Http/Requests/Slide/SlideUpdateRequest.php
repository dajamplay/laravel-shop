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
                Rule::unique('slides', 'title')->ignore($this->slide)
            ],
            'sale' => ['required', 'nullable', 'string'],
            'content' => ['required', 'nullable', 'string'],
            'image' => ['nullable', 'image'],
            'position' => ['required', 'nullable', 'string'],
            'link' => ['nullable', 'string'],
            'slider' => ['required', 'nullable', 'string'],
        ];
    }
}
