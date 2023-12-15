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
            'sku' => ['required', 'string', 'unique:products,sku'],
            'sort' => ['required'],
            'is_cosmetologist' => ['boolean', 'required'],
            'price_opt' => ['nullable', 'integer'],
            'size' => ['nullable', 'integer'],
            'brand_id' => ['required', 'integer','exists:brands,id'],
            'line_id' => ['required', 'integer','exists:lines,id'],
            'image' => ['nullable', 'image'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['nullable', 'integer', 'exists:tags,id'],
        ];
    }
}
