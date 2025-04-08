<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Beehives;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Production_cycle>
 */
class ProductionCycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generamos la fecha de inicio
        $startDate = $this->faker->date();

        // Generamos la fecha de fin como una fecha posterior a la fecha de inicio (por ejemplo, 1 a 30 días después)
        $endDate = $this->faker->dateTimeBetween($startDate, '+30 days')->format('Y-m-d');

        return [
            'production_status' => fake()->randomElement(['pendiente', 'en progreso', 'completado']),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'beehives_id' => Beehives::factory()     
         ];
    }
}
