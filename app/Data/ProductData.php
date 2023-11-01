<?php

namespace App\Data;

use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class ProductData extends Data
{
    public function __construct(

        public string $id,

        public string $slug,

        public string $title,

        public string $content,

        public int $price,

        public BrandData $brand,

        public ?int $size,

        public ?string $image,

        #[WithCast(DateTimeInterfaceCast::class, format: 'Y-m-d H:i:s')]
        public Carbon $created_at,

        #[WithCast(DateTimeInterfaceCast::class, format: 'Y-m-d H:i:s')]
        public Carbon $updated_at,
    )
    {
    }
}
