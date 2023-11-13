<?php

if (! function_exists('seo')) {
    function seo(): \App\Data\SeoData
    {
        return App\Facades\Seo::data();
    }
}

if (! function_exists('storage')) {
    function storage($image = ''): string
    {
        if($image != '' && file_exists(public_path($image))) return '/' . $image;

        return $image != '' && file_exists(storage_path('app/public/' . $image))
            ? asset('storage/' . $image)
            : asset('assets/images/no_image.jpg');
    }
}
