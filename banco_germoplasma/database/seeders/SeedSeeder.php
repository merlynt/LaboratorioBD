<?php

namespace Database\Seeders;

use App\Models\Seed;
use Illuminate\Database\Seeder;

class SeedSeeder extends Seeder
{
    public function run()
    {
        Seed::factory()->count(50)->create();
    }
}

