<?php

namespace Database\Factories;

use App\Models\StorageCondition;
use Illuminate\Database\Eloquent\Factories\Factory;

class StorageConditionFactory extends Factory
{
    protected $model = StorageCondition::class;

    public function definition()
    {
        return [
            'temperature' => $this->faker->randomFloat(2, -10, 30),
            'humidity' => $this->faker->randomFloat(2, 20, 80),
            'light_exposure' => $this->faker->randomElement(['low', 'medium', 'high']),
            'container_type' => $this->faker->randomElement(['glass', 'plastic', 'metal']),
            'storage_date' => $this->faker->dateTimeThisYear(),
            'notes' => $this->faker->optional()->text(200),
        ];
    }
}