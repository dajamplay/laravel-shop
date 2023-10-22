<?php

namespace App\Http\Controllers\Api\v1;

use App\Actions\Auth\UserLogoutAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController
{

    public function destroy(Request $request, UserLogoutAction $action): JsonResponse|RedirectResponse
    {
        $action->run($request->session(), 'api');

        return response()->json(['message' => trans('auth.logout')]);
    }

}
