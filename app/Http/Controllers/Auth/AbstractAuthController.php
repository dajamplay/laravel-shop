<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class AbstractAuthController extends Controller
{
    const GUARD_WEB = 'web';

    const GUARD_API = 'api';

    protected string $guard;

    public function __construct(Request $request)
    {
        $this->guard = $request->ajax() ? self::GUARD_API : self::GUARD_WEB;
    }
}
