<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Queens;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offspring>
 */
class OffspringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'daugther_bees' => fake()->numberBetween(1, 10), // cantidad de abejas hijas
            'queens_id' => Queens::factory()
        ];
    }
}
