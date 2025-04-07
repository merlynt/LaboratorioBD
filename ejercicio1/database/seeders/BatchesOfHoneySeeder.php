<?php

namespace Database\Seeders;

use Database\Factories\Batches_OfHoneyFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Batches_of_honey;

use Illuminate\Database\Seeder;
class BatchesOfHoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batches_of_Honey::factory(10)->create();
    }
}
