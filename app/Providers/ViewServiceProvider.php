<?php

namespace App\Providers;

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
    }
}
