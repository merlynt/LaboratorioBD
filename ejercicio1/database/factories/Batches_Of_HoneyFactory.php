<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Production_cycle;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batches_of_Honey>
 */
class Batches_Of_HoneyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'packing_date' => fake()->date(),
            'cuantity' => fake()->randomFloat(2, 1, 50), // 1 a 50 kg
            'batch_number' => strtoupper(fake()->unique()->bothify('Lote-####')),
            'production_cycle_id' => Production_cycle::factory()
        ];
    }
}
