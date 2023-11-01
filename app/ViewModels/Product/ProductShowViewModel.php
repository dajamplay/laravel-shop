<?php

namespace App\ViewModels\Product;

use App\Data\ProductData;
use Spatie\ViewModels\ViewModel;

class ProductShowViewModel extends ViewModel
{
    protected $view = 'shop.products.show';

    private ProductData $product;

    public function __construct(ProductData $product)
    {
        seo()->title = $product->title;

        seo()->description = $product->content;

        $this->product = $product;
    }

    public function product(): ProductData
    {
        return $this->product;
    }
}
