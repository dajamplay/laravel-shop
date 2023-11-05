<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    public function setTitleAttribute($value): void
    {
        if (!isset($this->attributes['slug'])) {
            $this->attributes['slug'] = Str::slug($value);
        }

        $this->attributes['title'] = $value;
    }
}
