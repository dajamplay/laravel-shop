<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\UserResetPasswordAction;
use App\Data\Auth\UserResetPasswordData;
use App\Data\Auth\UserResetPasswordFromEmailData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserResetPasswordFromEmailRequest;
use App\Http\Requests\Auth\UserResetPasswordRequest;
use App\ViewModels\Auth\ResetPasswordCreateViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Spatie\LaravelData\Exceptions\InvalidDataClass;

class ResetPasswordController extends Controller
{
    /**
     * @throws InvalidDataClass
     */
    public function create(
        UserResetPasswordFromEmailRequest $request
    ): ResetPasswordCreateViewModel
    {
        /** @var UserResetPasswordFromEmailData $data */
        $data = $request->getData();

        return new ResetPasswordCreateViewModel($data);
    }

    /**
     * @throws InvalidDataClass
     */
    public function update(
        UserResetPasswordRequest $request,
        UserResetPasswordAction  $action
    ): RedirectResponse
    {
        /** @var UserResetPasswordData $data */
        $data = $request->getData();

        $status = $action->run($data);

        if ($status != Password::PASSWORD_RESET) {
            return back()->withInput($request->only('email'))
                ->withErrors(['email' => trans($status)]);
        }

        return redirect()->route('login')->with('message', trans($status));
    }
}
