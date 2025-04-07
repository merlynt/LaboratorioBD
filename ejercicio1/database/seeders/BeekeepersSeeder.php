<?php

namespace Database\Seeders;

use App\Models\Beekeepers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeekeepersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beekeepers::factory()->count(10)->create();
    }
}
