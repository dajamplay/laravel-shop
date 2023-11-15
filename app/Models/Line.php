<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use App\Models\Traits\HasSlug;
use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Line extends Model
{
    use HasFactory, SoftDeletes, HasSlug, SoftCascadeTrait, Filterable;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    protected $casts = [
        'created_at' => "datetime:Y-m-d H:i:s",
        'updated_at' => "datetime:Y-m-d H:i:s",
        'deleted_at' => "datetime:Y-m-d H:i:s",
    ];

    protected array $softCascade = ['products'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
