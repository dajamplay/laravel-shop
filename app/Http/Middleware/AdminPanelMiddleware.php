<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $roleId = auth()->user()->role->id;

        if (!in_array($roleId, [6,7])) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
