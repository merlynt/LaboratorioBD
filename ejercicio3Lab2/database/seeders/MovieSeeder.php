<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Category;
use App\Models\Distributor;
use App\Models\Filmmaker;
use App\Models\Format;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(FormatSeeder::class);
        $this->call(DistributorSeeder::class);
        $this->call(FilmmakerSeeder::class);

        $categories = Category::all();
        $formats = Format::all();
        $distributors = Distributor::all();
        $filmmakers = Filmmaker::all();

        Movie::factory(5)->create()->each(function ($movie) use ($categories, $formats, $distributors, $filmmakers) {
            $movie->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );

            $movie->formats()->attach(
                $formats->random(rand(1, 3))->pluck('id')->toArray()
            );

            $movie->distributors()->attach(
                $distributors->random(rand(1, 3))->pluck('id')->toArray()
            );

            $movie->filmmakers()->attach(
                $filmmakers->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
