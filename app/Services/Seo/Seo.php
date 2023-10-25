<?php

namespace App\Services\Seo;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void setTitle(string $title = '')
 *
 * @see SeoService
 */
class Seo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SeoService::class;
    }
}
