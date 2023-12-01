<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\ViewModels\Home\HomeContactsViewModel;
use App\ViewModels\Home\HomeIndexViewModel;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(HomeIndexViewModel $viewModel): HomeIndexViewModel
    {
        return $viewModel->view('pages.home.index');
    }

    public function contacts(HomeContactsViewModel $viewModel): HomeContactsViewModel
    {
        return $viewModel->view('pages.home.contacts');
    }

    public function contactsStoreAndSend()
    {
        return back()->with(['message' => 'success']);
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
