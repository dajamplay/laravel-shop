<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->email(),
            'password' => fake()->password(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'registered_at' => fake()->dateTimeThisYear(),
            'birthday' => fake()->dateTimeThisCentury(),
            'remember_token' => Str::random(10),
            'role_id' => 1,
        ];
    }
}
