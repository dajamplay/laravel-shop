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
            'filter_tags' => [$this, 'tags'],
        ];
    }

    public function title(Builder $builder, string $value): void
    {
        $builder->where('title', 'like', "%$value%");
    }

    public function id(Builder $builder, string $value): void
    {
        $builder->where('id', 'like', "%$value%");
    }

    public function content(Builder $builder, string $value): void
    {
        $builder->where('content', 'like', "%$value%");
    }

    public function size(Builder $builder, string $value): void
    {
        $builder->where('size', 'like', "%$value%");
    }

    public function price(Builder $builder, string $value): void
    {
        $builder->where('price', 'like', "%$value%");
    }

    public function price_opt(Builder $builder, string $value): void
    {
        $builder->where('price_opt', 'like', "%$value%");
    }

    public function brand(Builder $builder, string $value): void
    {
        $builder->whereHas('brand', function($query) use ($value) {
            $query->where('title', 'like', "%$value%");
        });
    }

    public function line(Builder $builder, string $value): void
    {
        $builder->whereHas('line', function($query) use ($value) {
            $query->where('title', 'like', "%$value%");
        });
    }

    public function tags(Builder $builder, array $values): void
    {
        if ($values === []) return;
        $builder->whereHas('tags', function($query) use ($values) {
            $query->whereIn('title', $values);
        });
    }

    public function trashed(Builder $builder, string $value): void
    {
        if ($value === 'on' ) $builder->onlyTrashed();
    }
}
