<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Aquí se llaman a todos los seeders necesarios
        $this->call([
            SeedSeeder::class,
            RegionSeeder::class,

        ]);
    }
}