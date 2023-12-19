<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;

class EmailVerificationNotificationController extends Controller
{
    public function __invoke(AuthService $service): RedirectResponse
    {
        $user = request()->user();

        if (!$user->hasVerifiedEmail()) {
            $service->sendEmailVerificationNotification($user);
            return back()->with('message', trans('custom.auth.email_verify'));
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
