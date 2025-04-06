<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Awarding>
 */
class AwardingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'award' => fake()->words(2, true),
            'award_date' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'award_description' => fake()->words(5, true),
            'evaluation_id' => \App\Models\Evaluation::inRandomOrder()->first()->id,
        ];
    }
}
