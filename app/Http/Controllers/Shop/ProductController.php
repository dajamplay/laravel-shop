<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\ViewModels\Product\ProductShowViewModel;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        seo()->description = 'Магазин';

        seo()->title = 'Магазин профессиональной косметики';

        return view('pages.shop.products.index');
    }

    /**
     * @throws BindingResolutionException
     */
    public function show(Product $product)
    {
        $viewModel = app()->makeWith(ProductShowViewModel::class, ['product' => $product]);

        return $viewModel->view('pages.shop.products.show');
    }
}
