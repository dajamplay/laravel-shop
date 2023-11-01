<?php

if (! function_exists('seo')) {
    function seo(): \App\Data\SeoData
    {
        return App\Facades\Seo::data();
    }
}

if (! function_exists('storage')) {
    function storage($image): string
    {
        return asset('storage/' . $image);
    }
}


