<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

abstract class AbstractAuthController extends Controller
{
    const GUARD_WEB = 'web';

    protected string $guard;

    public function __construct()
    {
        $this->guard = self::GUARD_WEB;
    }
}
