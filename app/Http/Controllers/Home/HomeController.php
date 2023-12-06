<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\ViewModels\Home\HomeIndexViewModel;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(HomeIndexViewModel $viewModel): HomeIndexViewModel
    {
        return $viewModel->view('pages.home.index');
    }

    public function contacts(): View
    {
        return view('pages.home.contacts');
    }

    public function about(): View
    {
        return view('pages.home.about');
    }

    public function delivery(): View
    {
        return view('pages.home.delivery');
    }
}
