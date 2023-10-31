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
            'price' => fake()->randomFloat(2, 0, 100),
            'brand_id' => fake()->numberBetween(1,5),
            'size' => fake()->numberBetween(50,300),
            'image' => fake()->imageUrl(),
        ];
    }
}