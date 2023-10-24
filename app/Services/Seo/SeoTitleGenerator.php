<?php

namespace App\Services\Seo;

class SeoTitleGenerator
{
    public function generate(string $title = ""): mixed
    {
        return $title ?? config('app.name');
    }
}
