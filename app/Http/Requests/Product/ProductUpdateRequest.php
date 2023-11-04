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
            'title' => ['required', 'string', Rule::unique('products', 'title')->ignore($this->product)],
            'content' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'brand_id' => ['required', 'exists:brands,id'],
            'file' => ['image', 'nullable'],
            'tags' => ['nullable', 'array', 'required'],
        ];
    }
}
