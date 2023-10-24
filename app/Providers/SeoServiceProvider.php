<?php

namespace App\Providers;

use App\Services\Seo\SeoService;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
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
        $this->app->singleton(SeoService::class, function () {
            return new SeoService();
        });

        $seoService = $this->app->make(SeoService::class);

        View::composer('shared.seo', function ($view) use ($seoService){
            $view->with(['seo' => $seoService]);
        });
    }
}
