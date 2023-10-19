<?php

namespace App\Actions\Auth;

use App\Data\Auth\UserLoginData;
use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\ValidationException;

class UserLoginAction
{
    /**
     * @throws ValidationException
     */
    public function run(UserLoginData $data, Session $session, string $guard): void
    {
        $credentials = ['email' => $data->email, 'password' => $data->password];

        if (!auth($guard)->attempt($credentials, $data->remember)) {

            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);

        }

        $session->regenerate();
    }
}
