<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->sentence(3),
            'content' => fake()->text(300),
            'price' => fake()->randomFloat(2, 1500, 5000),
            'price_opt' => fake()->randomFloat(2, 1500, 5000),
            'brand_id' => fake()->numberBetween(1,5),
            'line_id' => fake()->numberBetween(1,5),
            'size' => fake()->numberBetween(50,300),
            'image' => 'tmp/products/' . fake()->numberBetween(1,8) . '.jpg',
            'sort' => 9999,
            'is_cosmetologist' => false,
            'sku' => fake()->unique()->sentence(1),
        ];
    }
}
