<?php

namespace Database\Seeders;

use App\Models\StorageCondition;
use Illuminate\Database\Seeder;

class StorageConditionSeeder extends Seeder
{
    public function run(): void
    {
        StorageCondition::factory()
            ->count(50)
            ->create();
    }
}