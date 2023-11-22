<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    protected function getCallbacks(): array
    {
        return [
            'filter_title' => [$this, 'title'],
            'filter_content' => [$this, 'content'],
        ];
    }

    public function title(Builder $builder, string $value)
    {
        $builder->where('title', 'like', "%$value%");
    }

    public function content(Builder $builder, string $value)
    {
        $builder->where('content', 'like', "%$value%");
    }
}
