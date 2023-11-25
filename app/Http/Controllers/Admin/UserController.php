<?php

namespace App\Http\Controllers\Admin;

use App\Actions\User\UserDestroyAction;
use App\Actions\User\UserStoreAction;
use App\Actions\User\UserUpdateAction;
use App\Data\User\UserStoreData;
use App\Data\User\UserUpdateData;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use App\ViewModels\Admin\User\UserCreateViewModel;
use App\ViewModels\Admin\User\UserEditViewModel;
use App\ViewModels\Admin\User\UserIndexViewModel;
use App\ViewModels\Admin\User\UserShowViewModel;
use Illuminate\Http\RedirectResponse;
use Spatie\LaravelData\Exceptions\InvalidDataClass;

final class UserController extends Controller
{
    public function index(UserIndexViewModel $viewModel): UserIndexViewModel
    {
        return $viewModel;
    }

    public function create(UserCreateViewModel $viewModel): UserCreateViewModel
    {
        return $viewModel;
    }

    public function store(UserStoreRequest $request, UserStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.users.index'))
            ->with('message', trans('custom.user.created'));
    }

    public function show(User $user): UserShowViewModel
    {
        return new UserShowViewModel($user);
    }

    public function edit(User $user): UserEditViewModel
    {
        return new UserEditViewModel($user);
    }

    public function update(UserUpdateRequest $request, User $user, UserUpdateAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $user);

        return redirect(route('admin.users.show', $user->fresh()))
            ->with('message', trans('custom.user.updated'));
    }

    public function destroy(UserDestroyAction $action, User $user): RedirectResponse
    {
        $action->run($user);

        return redirect()->back()->with('message', trans('custom.user.deleted'));
    }
}
