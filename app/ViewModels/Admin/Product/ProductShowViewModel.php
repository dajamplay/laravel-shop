<?php

namespace App\ViewModels\Admin\Product;

use App\Models\Product;
use Spatie\ViewModels\ViewModel;

class ProductShowViewModel extends ViewModel
{
    protected $view = 'admin.products.show';

    public function __construct(
        private readonly Product $product
    ){}

    public function product(): Product
    {
        return $this->product;
    }
}
