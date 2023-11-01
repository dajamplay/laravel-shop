<?php

namespace App\ViewModels\Admin\Product;

use App\Data\ProductData;
use Spatie\ViewModels\ViewModel;

class ProductShowViewModel extends ViewModel
{
    protected $view = 'admin.products.show';

    public function __construct(
        private readonly ProductData $productData
    ){}

    public function product(): ProductData
    {
        return $this->productData;
    }
}
