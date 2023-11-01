<?php

namespace App\ViewModels\Admin\Product;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class ProductCreateViewModel extends ViewModel
{
    protected $view = 'admin.products.create';

    public function __construct(){}

    public function brands(): Collection
    {
        return Brand::all();
    }
}
