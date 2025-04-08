<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BatchesOfHoney;

class BatchesOfHoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BatchesOfHoney::factory(10)->create();
    }
}

