<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AjaxAccessDenied extends Middleware
{
    protected function authenticate($request, array $guards)
    {
        if(!$request->ajax()) return;

        $this->unauthenticated($request, $guards);
    }
}
