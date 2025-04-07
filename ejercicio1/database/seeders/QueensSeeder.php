<?php

namespace Database\Seeders;

use App\Models\Queens;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QueensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Queens::factory()->count(10)->create();
    }
}
