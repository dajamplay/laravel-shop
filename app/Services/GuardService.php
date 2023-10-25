<?php

namespace App\Services;

use App\Models\User;

class GuardService
{
    const GUARD_USER = 'user';

    const GUARD_ADMIN = 'admin';

    public function getGuardByUserRole(int $role = User::ROLE_USER): string
    {
        if ($role === User::ROLE_SUPER_ADMIN) return self::GUARD_ADMIN;

        return self::GUARD_USER;
    }
}
