<?php

namespace Database\Factories;

use App\Models\Sample;
use App\Models\Seed;
use Illuminate\Database\Eloquent\Factories\Factory;

class SampleFactory extends Factory
{
    protected $model = Sample::class;

    public function definition()
    {
        return [
            'seed_id' => Seed::factory(),
            'collection_location' => $this->faker->city,
            'collection_date' => $this->faker->dateTimeBetween('-2 years'),
            'quantity' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->text(200),
        ];
    }
}
