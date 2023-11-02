<?php

namespace App\ViewModels\Admin\Brand;

use App\Data\BrandData;
use Spatie\ViewModels\ViewModel;

class BrandShowViewModel extends ViewModel
{
    protected $view = 'admin.brands.show';

    public function __construct(
        private readonly BrandData $data
    ){}

    public function brand(): BrandData
    {
        return $this->data;
    }
}
