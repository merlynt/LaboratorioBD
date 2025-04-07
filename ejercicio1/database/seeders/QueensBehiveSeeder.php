<?php

namespace Database\Seeders;

use App\Models\Queens_behive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QueensBehiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Queens_behive::factory()->count(10)->create();
    }
}
