<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Beehives;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sanitary_treatment>
 */
class SanitaryTreatmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'treatment_type' => fake()->randomElement(['limpieza','pesticidas','antibiotico']),
            'aplication_date' => fake()->date(),
            'description' => fake()->sentence(), 
            'beehives_id' => Beehives::factory(),
        ];
    }
}
