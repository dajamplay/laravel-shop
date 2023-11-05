<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:products,title'],
            'content' => ['nullable', 'string'],
            'price' => ['nullable', 'integer'],
            'price_opt' => ['nullable', 'integer'],
            'size' => ['nullable', 'integer'],
            'brand_id' => ['required', 'exists:brands,id'],
            'line_id' => ['required', 'exists:lines,id'],
            'file' => ['nullable', 'image'],
            'tags' => ['nullable', 'array'],
        ];
    }
}
