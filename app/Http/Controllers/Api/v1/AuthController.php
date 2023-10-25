<?php

namespace App\Http\Controllers\Api\v1;

use App\Actions\Auth\UserLoginAction;
use App\Actions\Auth\UserLogoutAction;
use App\Data\Auth\UserLoginData;
use App\Http\Controllers\Auth\AbstractAuthController;
use App\Http\Requests\Auth\UserLoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Spatie\LaravelData\Exceptions\InvalidDataClass;

class AuthController extends AbstractAuthController
{

    public function logout(Request $request, UserLogoutAction $action): JsonResponse|RedirectResponse
    {
        $action->run($request->session(), $this->guard);

        return response()->json(['message' => trans('custom.auth.logout')]);
    }

    /**
     * @throws InvalidDataClass
     * @throws ValidationException
     */
    public function login(UserLoginRequest $request, UserLoginAction $action): JsonResponse
    {
        /** @var UserLoginData $data */
        $data = $request->getData();

        $action->run($data, $request->session(), $this->guard);

        return response()->json(['message' => trans('custom.auth.login')]);

    }



}
