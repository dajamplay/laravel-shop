<?php

namespace App\ViewModels\Admin\Brand;

use App\Models\Brand;
use Spatie\ViewModels\ViewModel;

class BrandEditViewModel extends ViewModel
{
    protected $view = 'admin.brands.edit';

    public function __construct(
        private readonly Brand $brand
    ){}

    public function brand(): Brand
    {
        return $this->brand;
    }
}
