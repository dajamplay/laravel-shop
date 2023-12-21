<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\Setting;
use App\Services\Seo\SeoService;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    /**
     * @throws BindingResolutionException
     */
    public function boot(): void
    {
        $seoService = $this->app->make(SeoService::class);

        View::composer('partials.seo', function ($view) use ($seoService){
            $view->with([
                'seo' => $seoService->data()
            ]);
        });

        $settings = (function() {
            $settings = Setting::query()->get();

            return function ($key) use ($settings): string
            {
                return $settings->where('key', $key)->first()->value ?? '';
            };
        })();

        View::composer([
            'components.header.*',
            'components.footer.*',
            'pages.home.contacts',
            'pages.shop.products.show',
        ], function ($view) use ($settings){
            $view->with([
                'settings' => $settings
            ]);
        });

        $brands = Brand::query()->limit(4)->get();
        $lines = Line::query()->limit(4)->get();
        $products = Product::query()->limit(4)->orderBy('created_at', 'desc') ->get();
        $menu = compact('brands', 'lines', 'products');

        View::composer([
            'components.header.*',
            'components.footer.*',
        ], function ($view) use ($menu){
            $view->with([
                'menu' => $menu
            ]);
        });

    }
}
