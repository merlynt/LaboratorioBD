<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jury>
 */
class JuryFactory extends Factory
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
            'profession' => fake()->words(2, true),
            'experience' => rand(1, 20),
            'specialty' => fake()->words(2, true)
        ];
    }
}
