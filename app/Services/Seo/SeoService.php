<?php

namespace App\Services\Seo;

class SeoService
{
    public string $title = '';

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
