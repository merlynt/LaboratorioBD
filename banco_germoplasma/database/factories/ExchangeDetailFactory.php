<?php

namespace Database\Factories;

use App\Models\Exchange;
use App\Models\ExchangeDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExchangeDetailFactory extends Factory
{
    protected $model = ExchangeDetail::class;

    public function definition(): array
    {
        return [
            'exchange_id' => Exchange::factory(), // Crea un Exchange asociado
            'detail' => $this->faker->sentence(),
        ];
    }
}
