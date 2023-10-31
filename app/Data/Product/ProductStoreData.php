<?php

namespace App\Data\Product;

use Spatie\LaravelData\Attributes\MapName;
use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;

#[MapName(SnakeCaseMapper::class)]
class ProductStoreData extends Data
{
    public function __construct(

        public string $title,

        public string $content,

        public int $price,

        public UploadedFile|Optional $file,

        public string|Optional $image,
    )
    {
    }
}
