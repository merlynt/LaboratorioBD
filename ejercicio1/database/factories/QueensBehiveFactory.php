<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Beehives;
use App\Models\Queens;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Queens_behive>
 */
class QueensBehiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assignment_date' => fake()->date(),
            'queens_id' => Queens::factory(), 
            'beehives_id' => Beehives::factory()
        ];
    }
}
