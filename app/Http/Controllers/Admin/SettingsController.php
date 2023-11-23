<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ViewModels\Admin\Setting\SettingIndexViewModel;

class SettingsController extends Controller
{
    public function index(SettingIndexViewModel $viewModel): SettingIndexViewModel
    {
        return $viewModel->view('admin.settings.index');
    }
}
