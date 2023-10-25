<?php

namespace App\Actions\Auth;

use App\Data\Auth\UserLoginData;
use App\Services\AuthService;
use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\ValidationException;

class UserLoginAction
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * @throws ValidationException
     */
    public function run(UserLoginData $data, Session $session, string $guard): void
    {
        $credentials = ['email' => $data->email, 'password' => $data->password];

        //TODO move logic to service

        if (!auth($guard)->attempt($credentials, $data->remember)) {

            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);

        }

        $session->regenerate();
    }
}
