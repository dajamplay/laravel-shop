<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\UserLoginAction;
use App\Actions\Auth\UserLogoutAction;
use App\Data\Auth\UserLoginData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Providers\RouteServiceProvider;
use App\ViewModels\Auth\LoginCreateViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Spatie\LaravelData\Exceptions\InvalidDataClass;

class LoginController extends Controller
{
    public function create(LoginCreateViewModel $viewModel ): LoginCreateViewModel
    {
        return $viewModel;
    }

    /**
     * @throws InvalidDataClass
     * @throws ValidationException
     */
    public function store(UserLoginRequest $request, UserLoginAction $action): RedirectResponse
    {
        /** @var UserLoginData $data */
        $data = $request->getData();

        $action->run($data, $request->session(), 'web');

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request, UserLogoutAction $action): RedirectResponse
    {
        $action->run($request->session(), 'web');

        return redirect(RouteServiceProvider::HOME);
    }
}
