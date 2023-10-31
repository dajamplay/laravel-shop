<?php

namespace App\Data\Product;


use DateTime;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

#[MapName(SnakeCaseMapper::class)]
class ProductShowData extends Data
{
    public function __construct(

        public string $id,

        public string $slug,

//        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        #[WithCast(DateTimeInterfaceCast::class, format: 'Y-m-d H:i:s')]
        public Carbon $created_at,

//        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        #[WithCast(DateTimeInterfaceCast::class, format: 'Y-m-d H:i:s')]
        public Carbon $updated_at,

        public string $title,

        public string $content,

        public int $price,

        public string|Optional $image,
    )
    {
    }
}
