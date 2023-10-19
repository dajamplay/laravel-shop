<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\UserRegisterAction;
use App\Data\User\UserStoreData;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\LaravelData\Exceptions\InvalidDataClass;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * @throws InvalidDataClass
     */
    public function store(
        UserStoreRequest $request,
        UserRegisterAction $action
    ): RedirectResponse
    {
        /** @var UserStoreData $data */
        $data = $request->getData();

        $action->run($data, 'web');

        return redirect(RouteServiceProvider::HOME);
    }
}
