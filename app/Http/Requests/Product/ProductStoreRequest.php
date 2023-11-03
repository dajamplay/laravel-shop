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
            'content' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'brand_id' => ['required', 'exists:brands,id'],
            'file' => ['image'],
            'tags' => ['nullable', 'array', 'required'],
        ];
    }
}
