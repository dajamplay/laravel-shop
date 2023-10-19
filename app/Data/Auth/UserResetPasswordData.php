<?php

namespace App\Data\Auth;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class UserResetPasswordData extends Data
{
    public function __construct(

        public string $token,

        public string $email,

        public string $password,
    )
    {
    }
}
