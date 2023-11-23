<?php

namespace App\ViewModels\Home;

use App\Models\Brand;
use App\Models\Feedback;
use App\Models\Post;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slide;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class HomeIndexViewModel extends ViewModel
{
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

    public function settings(): Closure
    {
        $settings = Setting::query()->get();

        return function ($key) use ($settings): string
        {
            return $settings->where('key', $key)->first()->value ?? '';
        };
    }

    public function feedbacks(): Collection
    {
        return Feedback::query()->orderBy('id', 'asc')->limit(4)->get();
    }

    public function brands(): Collection
    {
        return Brand::query()->orderBy('id', 'asc')->get();
    }

    public function posts(): Collection
    {
        return Post::query()->orderBy('id', 'asc')->limit(4)->get();
    }


    public function slides(): Collection
    {
        return Slide::query()->where('slider', '=', '1')->orderBy('id', 'asc')->get();
    }

}
