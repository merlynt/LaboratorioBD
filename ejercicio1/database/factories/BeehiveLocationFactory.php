<?php

namespace Database\Factories;

use App\Models\BeehiveLocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BeehiveLocationFactory extends Factory
{
    protected $model =BeehiveLocation::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'location'=> fake()->address()
        ];
    }
}
