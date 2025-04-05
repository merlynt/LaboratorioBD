<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants =
        [
            [ 
                'name' => 'juan',
                'last_name' => 'perez',
            ],
            [
                'name' => 'maria',
                'last_name' => 'fernandez'
            ],
            [
                'name' => 'camila',
                'last_name' => 'hernández'
            ]
        ];

        foreach($participants as $participant)
        {
            Participant::create($participant);
        }
    }
}
