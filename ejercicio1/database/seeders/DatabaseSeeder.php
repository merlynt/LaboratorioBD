<?php

namespace Database\Seeders;

use App\Models\Batches_of_Honey;
use App\Models\BeehiveLocations;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       $this->call([
      
        BeehiveLocationSeeder::class,
        BeehivesSeeder::class,
        BeekeepersSeeder::class,
        OffspringSeeder::class,
        PollinationServiceSeeder::class,
        ProductionCycleSeeder::class,
        BatchesOfHoneySeeder::class,
        QueensSeeder::class,
        SanitaryTreatmentSeeder::class
       ]);
        
    }
}
