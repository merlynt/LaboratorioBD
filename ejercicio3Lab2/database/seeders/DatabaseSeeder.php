<?php

namespace Database\Seeders;

use App\Models\Auditorium;
use App\Models\Equipment;
use App\Models\Evaluation;
use App\Models\Jury;
use App\Models\Participant;
use App\Models\Screening;
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

       /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
 */
        $this->call([
            MovieSeeder::class,
            EquipmentSeeder::class,
            AuditoriumSeeder::class,
            ParticipantSeeder::class,
            ScreeningSeeder::class,
            JurySeeder::class,
            EvaluationSeeder::class
        ]);
    }
}
