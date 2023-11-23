<?php

namespace App\Http\Controllers\Admin;

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

    public function update_all(Request $request): RedirectResponse
    {
        $data = $request->except(['_token', '_method']);

        foreach ($data as $key => $value) {

            if(empty($value)) {
                return back()->withErrors([$key => 'Поле не может быть пустым']);
            }

            $setting = Setting::query()->where('key', '=', $key)->first();

            $setting->value = $value;

            $setting->save();
        }

        return back()->with(['message' => 'Настройки обновлены']);
    }
}
