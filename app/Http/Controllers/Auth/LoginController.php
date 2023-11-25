<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\UserLoginAction;
use App\Actions\Auth\UserLogoutAction;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Providers\RouteServiceProvider;
use App\ViewModels\Auth\LoginCreateViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends AbstractAuthController
{
    public function create(LoginCreateViewModel $viewModel ): LoginCreateViewModel
    {
        return $viewModel;
    }

    /**
     * @throws ValidationException
     */
    public function store(UserLoginRequest $request, UserLoginAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $request->session(), $this->guard);

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request, UserLogoutAction $action): RedirectResponse
    {
        $action->run($request->session(), $this->guard);

        return redirect(RouteServiceProvider::HOME);
    }
}
