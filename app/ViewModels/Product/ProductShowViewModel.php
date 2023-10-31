<?php

namespace App\ViewModels\Product;

use App\Data\Product\ProductShowData;
use Spatie\ViewModels\ViewModel;

class ProductShowViewModel extends ViewModel
{
    protected $view = 'shop.products.show';

    private ProductShowData $product;

    public function __construct(ProductShowData $product)
    {
        seo()->title = $product->title;

        seo()->description = $product->content;

        $this->product = $product;
    }

    public function product(): ProductShowData
    {
        return $this->product;
    }
}
