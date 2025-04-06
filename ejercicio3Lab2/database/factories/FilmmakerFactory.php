<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filmmaker>
 */
class FilmmakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'last_name' => fake()->words(2, true),
            'birth_date' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail()
        ];
    }
}
