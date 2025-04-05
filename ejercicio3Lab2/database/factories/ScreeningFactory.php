<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Screening>
 */
class ScreeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'audience' => fake()->words(1, true),
            'start_date' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'screening_time' => fake()->dateTimeThisYear()->format('Y-m-d H:i:s'),
            'ticket_price' => fake()->randomFloat(2, 5, 50),
            'movie_id' => \App\Models\Movie::inRandomOrder()->first()->id,
            'auditorium_id' => \App\Models\Auditorium::inRandomOrder()->first()->id,
            'equipment_id' => \App\Models\Equipment::inRandomOrder()->first()->id,
        ];
    }
}
