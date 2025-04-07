<?php

namespace Database\Seeders;

use App\Models\Pollination_service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollinationServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pollination_service::factory()->count(10)->create();
    }
}
