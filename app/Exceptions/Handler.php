<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
//        $this->renderable(function (\Illuminate\Auth\AuthenticationException $e, $request) {
//            if ($request->is('api/*')) {
//                return response()->json([
//                    'error' => __('Доступ закрыт'),
//                    'result' => null
//                ], 401);
//            }
//        });
//
//        $this->renderable(function (\Illuminate\Database\UniqueConstraintViolationException $e, $request) {
//            if ($request->is('api/*')) {
//                return response()->json([
//                    'error' => __('Неверные значения.'),
//                    'result' => null
//                ], 501);
//            }
//        });
//
//        $this->renderable(function (\Illuminate\Database\QueryException $e, $request) {
//            if ($request->is('api/*')) {
//                return response()->json([
//                    'error' => __('Ошибка базы данных.'),
//                    'result' => null
//                ], 501);
//            }
//        });
    }
}
