<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Category;
use App\Models\Format;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //category
        $this->call(CategorySeeder::class);

        $categories = Category::all();

        Movie::factory(5)->create()->each(function ($movie) use ($categories) {
            $movie->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        //format

        $this->call(FormatSeeder::class);

        $formats = Format::all();

        Movie::factory(5)->create()->each(function ($movie) use ($formats) {
            $movie->formats()->attach(
                $formats->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

    }
}
