<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory, HasSlug, SoftDeletes, Filterable;

    protected $fillable = [
        'title',
        'content',
        'price',
        'price_opt',
        'size',
        'brand_id',
        'line_id',
        'image',
        'sku',
        'is_cosmetologist',
        'sort',
    ];

    protected $casts = [
        'created_at' => "datetime:Y-m-d H:i:s",
        'updated_at' => "datetime:Y-m-d H:i:s",
        'deleted_at' => "datetime:Y-m-d H:i:s",
    ];

    protected $with = ['brand', 'line'];
//    protected $with = ['brand', 'tags', 'line'];

    protected static function booted()
    {
        static::addGlobalScope('is_cosmetologist', function (Builder $builder) {
            if(!auth()?->user()?->isCosmetologist()) {
                $builder->where('is_cosmetologist', false);
            }
        });
    }


    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function line(): BelongsTo
    {
        return $this->belongsTo(Line::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
