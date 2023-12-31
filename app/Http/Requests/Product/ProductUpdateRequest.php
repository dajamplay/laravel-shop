<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends FormRequest
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
                Rule::unique('products', 'title')->ignore($this->product)
            ],
            'sku' => [
                'required',
                'string',
                Rule::unique('products', 'sku')->ignore($this->product)
            ],
            'sort' => ['required'],
            'is_cosmetologist' => ['nullable', 'required'],
            'content' => ['nullable', 'string'],
            'price' => ['required', 'integer'],
            'price_opt' => ['required', 'integer'],
            'size' => ['nullable', 'integer'],
            'brand_id' => ['required', 'integer', 'exists:brands,id'],
            'line_id' => ['required', 'integer', 'exists:lines,id'],
            'image' => ['nullable', 'image'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['nullable', 'integer', 'exists:tags,id'],
        ];
    }
}
