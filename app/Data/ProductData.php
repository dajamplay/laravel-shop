<?php

namespace App\Data;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;

class ProductData extends Data
{
    public function __construct(

        public int $id,

        public string $slug,

        public string $title,

        public ?string $content,

        public ?int $price,

        public ?int $price_opt,

        public ?int $size,

        public ?string $image,

        public BrandData $brand,

        public LineData $line,

        /** @var $tags Collection<TagData> */
        public ?Collection $tags,

        #[WithCast(DateTimeInterfaceCast::class, format: 'Y-m-d H:i:s')]
        public Carbon $created_at,

        #[WithCast(DateTimeInterfaceCast::class, format: 'Y-m-d H:i:s')]
        public Carbon $updated_at,
    )
    {
    }
}
