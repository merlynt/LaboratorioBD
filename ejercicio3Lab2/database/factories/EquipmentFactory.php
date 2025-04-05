<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'equipment'=>fake()->words(1, true),
            'brand'=>fake()->words(1, true),
            'model'=>fake()->words(1, true),
            'estado'=>fake()->boolean(), 
        ];
    }
}
