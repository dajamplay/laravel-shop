<?php

if (! function_exists('seo')) {
    function seo(): \App\Data\Seo\SeoData
    {
        return App\Facades\Seo::data();
    }
}
