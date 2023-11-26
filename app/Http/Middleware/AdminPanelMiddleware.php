<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $roleId = auth()?->user()->role->id ?? Role::ROLE_BAN;

        if (!in_array($roleId, [Role::ROLE_MANAGER, Role::ROLE_ADMIN])) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
