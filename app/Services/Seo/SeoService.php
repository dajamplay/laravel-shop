<?php

namespace App\Services\Seo;

class SeoService
{
    private string $title;

    private string $keywords;

    public function __construct(string $title, string $keywords)
    {
        $this->keywords = $keywords;

        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getKeywords(): string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }
}
