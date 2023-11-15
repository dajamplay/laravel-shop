<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Product\ProductDestroyAction;
use App\Actions\Product\ProductStoreAction;
use App\Actions\Product\ProductUpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;
use App\ViewModels\Admin\Product\ProductCreateViewModel;
use App\ViewModels\Admin\Product\ProductEditViewModel;
use App\ViewModels\Admin\Product\ProductIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(ProductIndexViewModel $viewModel): ProductIndexViewModel
    {
        return $viewModel->view('admin.products.index');
    }

    public function show(Product $product): View
    {
        return view('admin.products.show', compact('product'));
    }

    public function create(ProductCreateViewModel $viewModel): ProductCreateViewModel
    {
        return $viewModel->view('admin.products.create');
    }

    public function store(ProductStoreRequest $request, ProductStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.products.index'))
            ->with('message', trans('custom.products.created'));
    }

    public function edit(Product $product): ProductEditViewModel
    {
        return (new ProductEditViewModel($product))
            ->view('admin.products.edit');
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
            ->with('message', trans('custom.products.updated'));
    }

    public function destroy(ProductDestroyAction $action, Product $product): RedirectResponse
    {
        $action->run($product);

        return redirect()->back()->with('message', trans('custom.products.deleted'));
    }
}
