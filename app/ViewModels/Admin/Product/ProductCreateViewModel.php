<?php

namespace App\ViewModels\Admin\Product;

use App\Models\Brand;
use App\Models\Line;
use App\Models\Tag;
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

    public function tags(): Collection
    {
        return Tag::all();
    }

    public function lines(): Collection
    {
        return Line::all();
    }
}
