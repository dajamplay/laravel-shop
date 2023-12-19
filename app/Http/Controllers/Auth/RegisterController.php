<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\UserRegisterAction;
use App\Http\Requests\User\UserStoreRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends AbstractAuthController
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(
        UserStoreRequest $request,
        UserRegisterAction $action
    ): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $this->guard);

        return redirect(RouteServiceProvider::HOME)->with('message', trans('custom.auth.email_verify'));
    }
}
