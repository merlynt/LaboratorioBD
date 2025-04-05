<?php

namespace Database\Factories;

use App\Models\GerminationTest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GerminationTest>
 */
class GerminationTestFactory extends Factory
{
    protected $model = GerminationTest::class;

    public function definition(): array
    {
        return [
            'sample_id' => 1, // Asume una muestra existente o  crear una factory para Sample
            'test_date' => $this->faker->date(),
            'germinated_seeds' => $this->faker->numberBetween(10, 90),
            'total_seeds' => 100,
            'observations' => $this->faker->sentence(),
        ];
    }
}
