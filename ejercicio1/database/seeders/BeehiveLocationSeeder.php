<?php

namespace Database\Seeders;

use App\Models\BeehiveLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class BeehiveLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BeehiveLocation::factory(10)->create();
    }
}
