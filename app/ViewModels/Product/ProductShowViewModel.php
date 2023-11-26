<?php

namespace App\ViewModels\Product;

use App\Models\Product;
use Spatie\ViewModels\ViewModel;

class ProductShowViewModel extends ViewModel
{
    private Product $product;

    public function __construct(Product $product)
    {
        seo()->title = $product->title;

        seo()->description = $product->content;

        $this->product = $product;
    }

    public function product(): Product
    {
        return $this->product;
    }
}
