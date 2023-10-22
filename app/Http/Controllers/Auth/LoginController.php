<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\UserLoginAction;
use App\Actions\Auth\UserLogoutAction;
use App\Data\Auth\UserLoginData;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Providers\RouteServiceProvider;
use App\ViewModels\Auth\LoginCreateViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Spatie\LaravelData\Exceptions\InvalidDataClass;
use Illuminate\Http\JsonResponse;

class LoginController extends AbstractAuthController
{
    public function create(LoginCreateViewModel $viewModel ): LoginCreateViewModel
    {
        return $viewModel;
    }

    /**
     * @throws InvalidDataClass
     * @throws ValidationException
     */
    public function store(UserLoginRequest $request, UserLoginAction $action): JsonResponse|RedirectResponse
    {
        /** @var UserLoginData $data */
        $data = $request->getData();

        $action->run($data, $request->session(), $this->guard);

        if($this->guard === self::GUARD_API) {
            return response()->json(['message' => trans('auth.login')]);
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request, UserLogoutAction $action): JsonResponse|RedirectResponse
    {
        $action->run($request->session(), $this->guard);

        return redirect(RouteServiceProvider::HOME);
    }
}
