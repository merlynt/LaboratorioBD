<?php

namespace Database\Seeders;

use App\Models\Sanitary_treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanitaryTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sanitary_treatment::factory()->count(10)->create();
    }
}
