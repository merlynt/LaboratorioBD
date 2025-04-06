<?php

namespace Database\Seeders;

use App\Models\Distributor;
use Database\Factories\DistributorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Distributor::factory(5)->create();
    }
}
