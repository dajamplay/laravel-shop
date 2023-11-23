<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class LineFilter extends AbstractFilter
{
    protected function getCallbacks(): array
    {
        return [
            'filter_title' => [$this, 'title'],
        ];
    }

    public function title(Builder $builder, string $value)
    {
        $builder->where('title', 'like', "%$value%");
    }
}
