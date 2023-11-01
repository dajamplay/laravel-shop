<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Product\ProductStoreAction;
use App\Data\Product\ProductStoreData;
use App\Data\ProductData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Models\Product;
use App\ViewModels\Admin\Product\ProductCreateViewModel;
use App\ViewModels\Admin\Product\ProductIndexViewModel;
use App\ViewModels\Admin\Product\ProductShowViewModel;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index(ProductIndexViewModel $viewModel): ProductIndexViewModel
    {
        return $viewModel;
    }

    public function show(Product $product): ProductShowViewModel
    {
        $data = ProductData::from($product);

        return new ProductShowViewModel($data);
    }

    public function create(ProductCreateViewModel $viewModel): ProductCreateViewModel
    {
        return $viewModel;
    }

    public function store(ProductStoreRequest $request, ProductStoreAction $action): RedirectResponse
    {
        $action->run($request->validated());

        return redirect(route('admin.products.index'))
            ->with('message', trans('custom.product.created'));
    }
}
