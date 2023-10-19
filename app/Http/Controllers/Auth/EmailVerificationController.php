<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\ViewModels\Auth\VerifyEmailCreateViewModel;
use Illuminate\Http\RedirectResponse;

class EmailVerificationController extends Controller
{
    public function __invoke(
        VerifyEmailCreateViewModel $viewModel
    ): VerifyEmailCreateViewModel|RedirectResponse
    {
        return request()->user()->hasVerifiedEmail()
            ? redirect()->intended(RouteServiceProvider::HOME)
            : $viewModel;
    }
}
