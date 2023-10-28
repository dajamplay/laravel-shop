<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\ViewModels\Home\HomeIndexViewModel;

class HomeController extends Controller
{
    public function index(HomeIndexViewModel $viewModel): HomeIndexViewModel
    {
        return $viewModel;
    }
}
