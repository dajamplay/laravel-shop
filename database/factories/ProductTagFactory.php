<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductTag>
 */
class ProductTagFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tag_id' => fake()->numberBetween(1,5),
            'product_id' => fake()->numberBetween(1,10),
        ];
    }
}
