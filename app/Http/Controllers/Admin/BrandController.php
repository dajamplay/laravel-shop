<?php

namespace App\Http\Controllers\Admin;

use App\Data\BrandData;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\ViewModels\Admin\Brand\BrandIndexViewModel;
use App\ViewModels\Admin\Brand\BrandShowViewModel;

class BrandController extends Controller
{
    public function index(BrandIndexViewModel $viewModel): BrandIndexViewModel
    {
        return $viewModel;
    }

    public function show(Brand $brand): BrandShowViewModel
    {
        $data = BrandData::from($brand);

        return new BrandShowViewModel($data);
    }
}
