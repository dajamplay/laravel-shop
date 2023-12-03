<?php

namespace App\ViewModels\Shop;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class BrandShowViewModel extends ViewModel
{
    private Brand $brand;

    public function __construct(Brand $brand)
    {
        seo()->title = 'Профессиональная косметика ' . $brand->title;

        seo()->description = $brand->content;

        $this->brand = $brand;
    }

    public function brand(): Brand
    {
        return $this->brand;
    }

    public function brands(): Collection
    {
        return Brand::all();
    }

    public function products(): Collection
    {
        return Product::query()->limit(5)->where('brand_id', '=', $this->brand->id)->get();
    }
}
