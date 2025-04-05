<?php

namespace Database\Factories;

use App\Models\Seed;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seed>
 */
class SeedFactory extends Factory
{
    protected $model = Seed::class;

    public function definition()
    {
        return [
            'scientific_name' => $this->faker->word,
            'family' => $this->faker->word,
            'genus' => $this->faker->word,
            'conservation_status' => $this->faker->randomElement(['EX', 'EW', 'CR', 'EN', 'VU', 'NT', 'LC', 'DD', 'NE']), 
            // EX - Extinta (Extinct)
            // Se refiere a las especies que no existen más en el planeta, ni en la naturaleza ni en cautiverio.
            // EW - Extinta en estado salvaje (Extinct in the Wild)
            // Se refiere a las especies que no existen más en estado salvaje, pero que sí existen en cautiverio.
            // CR - En peligro crítico (Critically Endangered)
            // Se refiere a las especies que están al borde de la extinción, con una probabilidad muy alta de desaparecer en un futuro cercano.
            // EN - En peligro (Endangered)
            // Se refiere a las especies que están en peligro de extinción, pero que aún tienen una población viable.
            // VU - Vulnerable (Vulnerable)
            // Se refiere a las especies que están en riesgo de extinción, pero que aún tienen una población viable.                
            // NT - Casi Amenazada (Near Threatened)
            // Se refiere a las especies que están en riesgo de extinción, pero que aún tienen una población viable.
            // LC - Preocupación menor (Least Concern)
            // Se refiere a las especies que no están en riesgo de extinción y que tienen una población viable.
            // DD - Datos insuficientes (Data Deficient)
            // Se refiere a las especies que no tienen suficiente información para determinar su estado de conservación.
            // NE - No evaluada (Not Evaluated)
            // Se refiere a las especies que no han sido evaluadas por la UICN.            
            'registration_date' => $this->faker->date(),
        ];
    }
}
