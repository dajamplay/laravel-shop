<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{

    protected function getCallbacks(): array
    {
        return [
            'filter_first_name' => [$this, 'firstName'],
            'filter_last_name' => [$this, 'lastName'],
            'filter_email' => [$this, 'email'],
            'filter_role' => [$this, 'role'],
        ];
    }

    public function firstName(Builder $builder, string $value)
    {
        $builder->where('first_name', 'like', "%$value%");
    }

    public function lastName(Builder $builder, string $value)
    {
        $builder->where('last_name', 'like', "%$value%");
    }

    public function email(Builder $builder, string $value)
    {
        $builder->where('email', 'like', "%$value%");
    }

    public function role(Builder $builder, string $value)
    {
        $builder->whereHas('role', function($query) use ($value) {
            $query->where('title', 'like', "%$value%");
        });
    }
}
