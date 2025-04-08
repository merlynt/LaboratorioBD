<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Beehive_locations;
use App\Models\BeehiveLocation;
use app\Models\Beekeepers;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beehives>
 */
class BeehivesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beehive_number' => strtoupper(fake()->unique()->bothify('####')),
            'beehive_location_id' => BeehiveLocation::factory(),
            'beekeepers_id' => Beekeepers::factory()
        ];
    }
}
