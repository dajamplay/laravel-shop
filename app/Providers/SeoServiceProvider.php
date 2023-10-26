<?php

namespace App\Providers;

use App\Data\Seo\SeoData;
use App\Services\Seo\SeoService;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(SeoService::class);
    }

    public function boot(): void
    {
        //
    }
}
