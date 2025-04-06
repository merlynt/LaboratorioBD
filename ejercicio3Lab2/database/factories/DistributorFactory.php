<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Distributor>
 */
class DistributorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->company(),
            'phone' => fake()->regexify('(\d{3})-\d{3}-\d{4}'),
            'email' => fake()->safeEmail(),
            'distribution_type' => fake()->word(1, true)
        ];
    }
}
