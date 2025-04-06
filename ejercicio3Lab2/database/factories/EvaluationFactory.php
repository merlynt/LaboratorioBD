<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plot' => rand(1, 10),
            'direction' => rand(1, 10),
            'performances' => rand(1, 10),
            'cinematography' => rand(1, 10),
            'soundtrack' => rand(1, 10),
            'editing' => rand(1, 10),
            'jury_id' => \App\Models\Jury::inRandomOrder()->first()->id,
            'movie_id' => \App\Models\Movie::inRandomOrder()->first()->id,
        ];
    }
}
