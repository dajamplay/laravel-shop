<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Setting\SettingUpdateAction;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\ViewModels\Admin\Setting\SettingIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(SettingIndexViewModel $viewModel): SettingIndexViewModel
    {
        return $viewModel->view('admin.settings.index');
    }

    public function update_all(Request $request, SettingUpdateAction $action): RedirectResponse
    {
        $data = $request->except(['_token', '_method']);

        $key = $action->run($data);

        if($key !== '') {
            return back()->withErrors([$key => trans('custom.settings.empty')]);
        }

        return back()->with(['message' => trans('custom.settings.updated')]);
    }
}
