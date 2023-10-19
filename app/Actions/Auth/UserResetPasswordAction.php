<?php

namespace App\Actions\Auth;

use App\Data\Auth\UserResetPasswordData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class UserResetPasswordAction
{
    public function run(UserResetPasswordData $data): string
    {
        return Password::reset(
            $data->toArray(),
            function ($user) use ($data) {
                $user->forceFill([
                    'password' => Hash::make($data->password),
                    'remember_token' => Str::random(60)
                ])->save();
            }
        );
    }
}
