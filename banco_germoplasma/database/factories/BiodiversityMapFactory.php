<?php

namespace Database\Factories;

use App\Models\BiodiversityMap;
use Illuminate\Database\Eloquent\Factories\Factory;

class BiodiversityMapFactory extends Factory
{
    protected $model = BiodiversityMap::class;

    public function definition()
    {
        return [
            'location_name' => $this->faker->city,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'altitude' => $this->faker->numberBetween(0, 4000),
            'ecosystem_type' => $this->faker->randomElement(['bosque', 'páramo', 'selva', 'desierto']),
            'collection_date' => $this->faker->dateTimeThisYear(),
            'species_count' => $this->faker->numberBetween(1, 100)
        ];
    }
}