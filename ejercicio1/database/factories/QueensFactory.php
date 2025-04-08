<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Queens>
 */
class QueensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'genetic_code' => strtoupper(fake()->unique()->bothify('Codigo Genetico-??###')), // Código genético aleatorio de 6 letras
            'origin' => fake()->randomElement(['El Salvador','Usa','Mexico','Guatemala']),
            'birthdate' => fake()->date(), 
        ];
    }
}
