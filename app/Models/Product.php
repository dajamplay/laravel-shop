<?php

namespace App\Models;

use App\Data\Brand\BrandShowData;
use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'title',
        'content',
        'price',
        'size',
        'image'
    ];

    protected $casts = [
        'brand' => BrandShowData::class,
        'created_at' => "datetime:Y-m-d H:i:s",
        'updated_at' => "datetime:Y-m-d H:i:s",
    ];

    protected $with = ['brand'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}