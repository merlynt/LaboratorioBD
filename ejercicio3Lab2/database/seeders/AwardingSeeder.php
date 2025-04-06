<?php

namespace Database\Seeders;

use App\Models\Awarding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Awarding::factory(5)->create();
    }
}
