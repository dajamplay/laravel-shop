<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    protected function getCallbacks(): array
    {
        return [
            'filter_title' => [$this, 'title'],
            'filter_id' => [$this, 'id'],
            'filter_brand' => [$this, 'brand'],
            'filter_line' => [$this, 'line'],
            'filter_content' => [$this, 'content'],
            'filter_size' => [$this, 'size'],
            'filter_price' => [$this, 'price'],
            'filter_price_opt' => [$this, 'price_opt'],
            'filter_trashed' => [$this, 'trashed'],
        ];
    }

    public function title(Builder $builder, string $value)
    {
        $builder->where('title', 'like', "%$value%");
    }

    public function id(Builder $builder, string $value)
    {
        $builder->where('id', 'like', "%$value%");
    }

    public function content(Builder $builder, string $value)
    {
        $builder->where('content', 'like', "%$value%");
    }

    public function size(Builder $builder, string $value)
    {
        $builder->where('size', 'like', "%$value%");
    }

    public function price(Builder $builder, string $value)
    {
        $builder->where('price', 'like', "%$value%");
    }

    public function price_opt(Builder $builder, string $value)
    {
        $builder->where('price_opt', 'like', "%$value%");
    }

    public function brand(Builder $builder, string $value)
    {
        $builder->whereHas('brand', function($query) use ($value) {
            $query->where('title', 'like', "%$value%");
        });
    }

    public function line(Builder $builder, string $value)
    {
        $builder->whereHas('line', function($query) use ($value) {
            $query->where('title', 'like', "%$value%");
        });
    }

    public function trashed(Builder $builder, string $value)
    {
        if ($value === 'on' ) $builder->onlyTrashed();
    }
}
