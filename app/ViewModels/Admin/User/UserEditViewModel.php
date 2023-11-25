<?php

namespace App\ViewModels\Admin\User;

use App\Models\User;
use App\Services\RoleService;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class UserEditViewModel extends ViewModel
{
    private RoleService $roleService;

    public function __construct(
        private readonly User $user,
        RoleService $roleService,
    ){
        $this->roleService = $roleService;
    }

    public function user(): User
    {
        return $this->user;
    }

    public function roles(): Collection
    {
        return $this->roleService->getRolesWithoutAdmin();
    }
}
