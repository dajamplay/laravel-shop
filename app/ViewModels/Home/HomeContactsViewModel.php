<?php

namespace App\ViewModels\Home;

use App\Models\Setting;
use Closure;
use Spatie\ViewModels\ViewModel;

class HomeContactsViewModel extends ViewModel
{
    public function __construct()
    {
        seo()->description = 'Контакты';
        seo()->title = 'Контакты';
    }

    public function settings(): Closure
    {
        $settings = Setting::query()->where('key', 'like', 'contact%')->get();

        return function ($key) use ($settings): string
        {
            return $settings->where('key', $key)->first()->value ?? '';
        };
    }
}
