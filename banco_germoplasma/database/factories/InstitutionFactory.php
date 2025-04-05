<?php

namespace Database\Factories;

use App\Models\Institution;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstitutionFactory extends Factory
{
    protected $model = Institution::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,  // Nombre de la institución
            'description' => $this->faker->sentence,  // Descripción de la institución
        ];
    }
}
