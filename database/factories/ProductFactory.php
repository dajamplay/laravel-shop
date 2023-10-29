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
            'title' => 'Тест ' . fake()->unique()->sentence(3),
            'content' => fake()->text(300),
            'price' => fake()->randomFloat(2, 0, 100),
            'image' => fake()->imageUrl(),
        ];
    }
}
