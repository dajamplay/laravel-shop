<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ProductCollectionData extends Data
{
    public function __construct(

        #[DataCollectionOf(ProductData::class)]
        public DataCollection $products,

    )
    {
    }
}
