<?php

namespace Database\Seeders;

use App\Models\BiodiversityMap;
use Illuminate\Database\Seeder;

class BiodiversityMapSeeder extends Seeder
{
    public function run(): void
    {
        BiodiversityMap::factory()
            ->count(40)
            ->create();
    }
}