<?php

namespace Database\Seeders;

use App\Models\GerminationHistory;
use Illuminate\Database\Seeder;

class GerminationHistorySeeder extends Seeder
{
    public function run(): void
    {
        GerminationHistory::factory()
            ->count(30)
            ->create();
    }
}