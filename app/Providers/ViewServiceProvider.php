<?php

namespace App\Providers;

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
        ], function ($view) use ($settings){
            $view->with([
                'settings' => $settings
            ]);
        });
    }
}
