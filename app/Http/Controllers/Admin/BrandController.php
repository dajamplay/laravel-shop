<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Brand\BrandStoreAction;
use App\Data\BrandData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\BrandStoreRequest;
use App\Http\Requests\Brand\BrandUpdateRequest;
use App\Models\Brand;
use App\ViewModels\Admin\Brand\BrandCreateViewModel;
use App\ViewModels\Admin\Brand\BrandEditViewModel;
use App\ViewModels\Admin\Brand\BrandIndexViewModel;
use App\ViewModels\Admin\Brand\BrandShowViewModel;
use Illuminate\Http\RedirectResponse;

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

    public function create(BrandCreateViewModel $viewModel): BrandCreateViewModel
    {
        return $viewModel;
    }

    public function store(BrandStoreRequest $request, BrandStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.brands.index'))
            ->with('message', trans('custom.brands.created'));
    }

    public function edit(Brand $brand): BrandEditViewModel
    {
        return new BrandEditViewModel($brand);
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
}
