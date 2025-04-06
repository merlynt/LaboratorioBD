<?php

namespace Database\Seeders;

use App\Models\Filmmaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmmakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filmmaker::factory(5)->create();
    }
}
