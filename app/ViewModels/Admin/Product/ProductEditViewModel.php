<?php

namespace App\ViewModels\Admin\Product;

use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class ProductEditViewModel extends ViewModel
{
    public function __construct(
        private readonly Product $product
    ){}

    public function product(): Product
    {
        return $this->product;
    }

    public function brands(): Collection
    {
        return Brand::all();
    }

    public function tags(): Collection
    {
        return Tag::all();
    }

    public function lines(): Collection
    {
        return Line::all();
    }

    public function cosmetologists(): array
    {
        return [
            (object)['id' => '1', 'title' => 'Да'],
            (object)['id' => '0', 'title' => 'Нет'],
        ];
    }

}
