<?php

namespace App\Facades;

use App\Data\Seo\SeoData;
use App\Services\Seo\SeoService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static SeoData data()
 *
 * @see SeoService
 */
class Seo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SeoService::class;
    }
}
