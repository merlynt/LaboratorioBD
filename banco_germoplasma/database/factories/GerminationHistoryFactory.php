<?php

namespace Database\Factories;

use App\Models\GerminationHistory;
use App\Models\Seed;
use Illuminate\Database\Eloquent\Factories\Factory;

class GerminationHistoryFactory extends Factory
{
    protected $model = GerminationHistory::class;

    public function definition()
    {
        return [
            'seed_id' => Seed::factory(),
            'test_date' => $this->faker->dateTimeThisYear(),
            'germination_rate' => $this->faker->randomFloat(2, 0, 100),
            'germination_conditions' => [
                'temperature' => $this->faker->randomFloat(2, 20, 30),
                'humidity' => $this->faker->randomFloat(2, 50, 90),
                'light_hours' => $this->faker->numberBetween(8, 16)
            ],
            'notes' => $this->faker->optional()->text(200),
        ];
    }
}