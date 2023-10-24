<?php

namespace App\Services\Seo;

class SeoFactoryService
{
    private SeoTitleGenerator $titleGenerator;

    public function __construct(SeoTitleGenerator $titleGenerator)
    {
        $this->titleGenerator = $titleGenerator;
    }

    public function create(string $title = "", string $keywords = ""): SeoService
    {
        $title = $this->titleGenerator->generate($title);

        return new SeoService($title, $keywords);
    }
}
