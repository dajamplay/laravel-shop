<?php

namespace App\Services;

use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

class RoleService
{
    public function getRolesWithoutAdmin(): Collection
    {
        return Role::query()->whereNotIn('id', [6, 7])->get();
    }
}
