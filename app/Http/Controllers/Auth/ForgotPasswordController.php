<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserForgotPasswordRequest;
use App\ViewModels\Auth\ForgotPasswordCreateViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function create(
        ForgotPasswordCreateViewModel $viewModel
    ): ForgotPasswordCreateViewModel
    {
        return $viewModel;
    }

    public function store(UserForgotPasswordRequest $request): RedirectResponse
    {
        $status = Password::sendResetLink($request->only('email'));

        if ($status != Password::RESET_LINK_SENT) {
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($status)]);
        }

        return back()->with('status', trans($status));
    }
}
