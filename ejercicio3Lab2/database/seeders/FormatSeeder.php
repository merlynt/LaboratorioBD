<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Format;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formats =[
            ['format' => 'DVD', 'description' => 'Formato físico en disco digital, calidad estándar.'],
            ['format' => 'Blu-ray', 'description' => 'Formato de alta definición, ofrece mejor calidad de imagen y sonido.'],
            ['format' => 'Digital', 'description' => 'Película descargable o en streaming, generalmente en HD o 4K.'],
            ['format' => '4K', 'description' => 'Formato de ultra alta definición, cuatro veces más resolución que Full HD.'],
            ['format' => 'VHS', 'description' => 'Formato de video en cinta magnética, calidad estándar y retro.'],
            ['format' => 'IMAX', 'description' => 'Formato de cine de gran pantalla con resolución y sonido superiores.']
        ];

        foreach($formats as $format){
            Format::create($format);
        }
    }
}
