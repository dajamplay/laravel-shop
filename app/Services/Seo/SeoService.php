<?php

namespace App\Services\Seo;

use App\Data\Seo\SeoData;

class SeoService
{
    private SeoData $seoData;

    public function __construct(SeoData $seoData)
    {
        $this->seoData = $seoData;
    }

    public function data(): SeoData
    {
        return $this->seoData;
    }
}
