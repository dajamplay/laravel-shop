<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\ViewModels\Shop\BrandShowViewModel;
use Illuminate\Contracts\Container\BindingResolutionException;

class BrandController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * @throws BindingResolutionException
     */
    public function show(Brand $brand): BrandShowViewModel
    {
        $viewModel = app()->makeWith(BrandShowViewModel::class, ['brand' => $brand]);

        return $viewModel->view('pages.shop.brands.show');
    }
}
