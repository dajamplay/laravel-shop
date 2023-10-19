<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const FIRST_NAME = 'first_name';
    public const LAST_NAME = 'last_name';
    public const EMAIL = 'email';

    protected function getCallbacks(): array
    {
        return [
            self::FIRST_NAME => [$this, 'firstName'],
            self::LAST_NAME => [$this, 'lastName'],
            self::EMAIL => [$this, 'email'],
        ];
    }

    public function firstName(Builder $builder, string $value)
    {
        $builder->where(self::FIRST_NAME, 'like', "%$value%");
    }

    public function lastName(Builder $builder, string $value)
    {
        $builder->where(self::LAST_NAME, 'like', "%$value%");
    }

    public function email(Builder $builder, string $value)
    {
        $builder->where(self::EMAIL, 'like', "%$value%");
    }
}
