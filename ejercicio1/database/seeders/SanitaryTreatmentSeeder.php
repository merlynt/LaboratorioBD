<?php

namespace Database\Seeders;

use App\Models\SanitaryTreatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanitaryTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SanitaryTreatment::factory()->count(10)->create();
    }
}
