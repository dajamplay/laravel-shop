<?php

namespace App\Data\Product;

use Spatie\LaravelData\Attributes\MapName;
use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class ProductStoreData extends Data
{
    public function __construct(

        public string $title,

        public string $content,

        public int $price,

        public ?UploadedFile $file,

        public ?string $image,
    )
    {
    }
}
