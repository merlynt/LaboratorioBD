<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->words(3, true),
            'synopsis'=>fake()->sentence(),
            'duration'=>rand(1, 3),
            'publication_date' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'), 
        ];
    }
}
