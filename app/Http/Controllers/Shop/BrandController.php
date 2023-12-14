<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\ViewModels\Shop\BrandShowViewModel;
use Illuminate\Contracts\Container\BindingResolutionException;

class BrandController extends Controller
{
    /**
     * @throws BindingResolutionException
     */
    public function show(Brand $brand): BrandShowViewModel
    {
        $viewModel = app()->makeWith(BrandShowViewModel::class, ['brand' => $brand]);

        seo()->title = 'Профессиональная косметика ' . $brand->title . '. ООО "Елеанта".';

        seo()->description = $brand->content;

        return $viewModel->view('pages.shop.brands.show');
    }
}
