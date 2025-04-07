<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Beehives;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pollination_service>
 */
class PollinationServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'crops' => fake()->word,
            $start_date='start_date' =>fake()->date(),
            'end_date' => fake()->dateTimeBetween($start_date, '+10 days')->format('Y-m-d'),
            'conditions' => fake()->sentence, // Condiciones para la polinización
            'beehives_id' => Beehives::factory(),
        ];
    }
}
