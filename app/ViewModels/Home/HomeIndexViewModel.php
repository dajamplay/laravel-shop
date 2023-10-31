<?php

namespace App\ViewModels\Home;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class HomeIndexViewModel extends ViewModel
{
    protected $view = 'home.index';

    public function __construct()
    {
        seo()->description = 'Тестовое описание';
        seo()->title = 'Тестовый заголовок';
    }

    public function featuredProducts(): Collection
    {
        return Product::query()->orderBy('id', 'desc')->limit(4)->get();
    }

    public function bestsellerProducts(): Collection
    {
        return Product::query()->orderBy('id', 'desc')->limit(4)->get();
    }

    public function latestProducts(): Collection
    {
        return Product::query()->orderBy('id', 'desc')->limit(4)->get();
    }

}
