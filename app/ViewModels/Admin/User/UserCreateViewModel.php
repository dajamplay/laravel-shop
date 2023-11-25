<?php

namespace App\ViewModels\Admin\User;

use App\Services\RoleService;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class UserCreateViewModel extends ViewModel
{
    private RoleService $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function roles(): Collection
    {
        return $this->roleService->getRolesWithoutAdmin();
    }
}
