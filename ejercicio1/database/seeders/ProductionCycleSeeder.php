<?php

namespace Database\Seeders;

use App\Models\ProductionCycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductionCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductionCycle::factory()->count(10)->create();
    }
}
