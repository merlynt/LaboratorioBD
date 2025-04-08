<?php

namespace Database\Seeders;

use App\Models\PollinationService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollinationServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PollinationService::factory()->count(10)->create();
    }
}
