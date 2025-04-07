<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RegionSeeder::class,
            SeedSeeder::class,
            SampleSeeder::class,
            StorageConditionSeeder::class,
            GerminationHistorySeeder::class,
            BiodiversityMapSeeder::class,
        ]);
    }
}