<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Brand\BrandDestroyAction;
use App\Actions\Brand\BrandStoreAction;
use App\Actions\Brand\BrandUpdateAction;
use App\Exceptions\AdminPanelException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\BrandStoreRequest;
use App\Http\Requests\Brand\BrandUpdateRequest;
use App\Models\Brand;
use App\ViewModels\Admin\Brand\BrandIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BrandController extends Controller
{
    public function index(BrandIndexViewModel $viewModel): BrandIndexViewModel
    {
        return $viewModel->view('admin.brands.index');
    }

    public function show(Brand $brand): View
    {
        return view('admin.brands.show', compact('brand'));
    }

    public function create(): View
    {
        return view('admin.brands.create');
    }

    public function store(BrandStoreRequest $request, BrandStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.brands.index'))
            ->with('message', trans('custom.brands.created'));
    }

    public function edit(Brand $brand): View
    {
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(
        Brand $brand,
        BrandUpdateAction $action,
        BrandUpdateRequest $request
    ): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $brand);

        return redirect(route('admin.brands.show', $brand->fresh()))
            ->with('message', trans('custom.brands.updated'));
    }

    /**
     * @throws AdminPanelException
     */
    public function destroy(BrandDestroyAction $action, Brand $brand): RedirectResponse
    {
        $action->run($brand);

        return redirect()->back()->with('message', trans('custom.brands.deleted'));
    }
}
