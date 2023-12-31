<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Auth\Events\Registered;

class AuthService
{
    public function auth(User $user, string $guard): void
    {
        auth($guard)->login($user);
    }

    public function addRegisteredEvent(User $user): void
    {
        event(new Registered($user));
    }

    public function sendEmailVerificationNotification(User $user): void
    {
        $user->sendEmailVerificationNotification();
    }
}
