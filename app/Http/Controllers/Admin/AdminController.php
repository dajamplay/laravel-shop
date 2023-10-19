<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ViewModels\Admin\AdminIndexViewModel;

class AdminController extends Controller
{
    public function index(AdminIndexViewModel $viewModel): AdminIndexViewModel
    {
        return $viewModel;
    }
}
