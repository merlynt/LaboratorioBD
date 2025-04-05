<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auditorium>
 */
class AuditoriumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'auditorium_number'=>rand(1, 6),
            'capacity'=>rand(20, 50),
            'status'=>fake()->boolean(),
            'Location'=>fake()->words(5, true)
        ];
    }
}
