<?php

namespace Database\Seeders;

use App\Models\Offspring;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffspringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Offspring::factory()->count(10)->create();
    }
}
