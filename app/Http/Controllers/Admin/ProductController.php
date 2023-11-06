<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Product\ProductDestroyAction;
use App\Actions\Product\ProductStoreAction;
use App\Actions\Product\ProductUpdateAction;
use App\Data\ProductData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;
use App\ViewModels\Admin\Product\ProductCreateViewModel;
use App\ViewModels\Admin\Product\ProductEditViewModel;
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
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.products.index'))
            ->with('message', trans('custom.product.created'));
    }

    public function edit(Product $product): ProductEditViewModel
    {
        return new ProductEditViewModel($product);
    }

    public function update(
        ProductUpdateRequest $request,
        ProductUpdateAction $action,
        Product $product
    ): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $product);

        return redirect(route('admin.products.show', $product->fresh()))
            ->with('message', trans('custom.product.updated'));
    }

    public function destroy(ProductDestroyAction $action, Product $product): RedirectResponse
    {
        $action->run($product);

        return redirect(route('admin.products.index'))
            ->with('message', trans('custom.product.deleted'));
    }
}
