<?php

namespace App\Http\Controllers\Shop;

use App\Data\ProductData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\ViewModels\Product\ProductShowViewModel;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        seo()->description = 'Магазин';

        seo()->title = 'Магазин профессиональной косметики';

        $products = Product::all();

        return view('shop.products.index', compact('products'));
    }

    public function show(Product $product): ProductShowViewModel
    {
        $data = ProductData::from($product);

        return new ProductShowViewModel($data);
    }
}
