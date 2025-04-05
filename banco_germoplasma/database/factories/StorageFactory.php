<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Storage>
 */
class StorageFactory extends Factory
{
    protected $model = Storage::class;

    public function definition(): array
    {
        return [
            'location' => $this->faker->address(),
            'type' => $this->faker->randomElement(['Frío', 'Seco', 'Congelador']),
            'capacity' => $this->faker->numberBetween(100, 10000),
        ];
    }
}
