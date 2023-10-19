<?php

namespace App\Data\User;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapName(SnakeCaseMapper::class)]
class UserStoreData extends Data
{
    public function __construct(

        public string $firstName,

        public string $lastName,

        public string $email,

        public string $password,

        public string|Optional $birthday,
    )
    {
    }
}
