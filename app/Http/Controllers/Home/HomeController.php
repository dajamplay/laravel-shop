<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Message\MessageStoreRequest;
use App\ViewModels\Home\HomeContactsViewModel;
use App\ViewModels\Home\HomeIndexViewModel;
use Illuminate\Http\RedirectResponse;
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

    public function contactsStoreAndSend(MessageStoreRequest $request): RedirectResponse
    {
        return back()->with(['message' => $request->validated()['message']]);
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
