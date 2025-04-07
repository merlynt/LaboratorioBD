<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jury;

class JurySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jury::factory(15)->create();
    }
}
