<?php

namespace App\Actions\Auth;

use Illuminate\Contracts\Session\Session;

class UserLogoutAction
{
    public function run(Session $session, string $guard): void
    {
        auth($guard)->logout();

        $session->invalidate();

        $session->regenerateToken();
    }
}
