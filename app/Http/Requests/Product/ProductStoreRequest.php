<?php

namespace App\Http\Requests\Product;

use App\Data\Product\ProductStoreData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class ProductStoreRequest extends FormRequest
{
    use WithData;

    protected string $dataClass = ProductStoreData::class;

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
            'file' => ['image'],
        ];
    }
}
