<?php

namespace Database\Seeders;

use App\Models\Production_cycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductionCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Production_cycle::factory()->count(10)->create();
    }
}
