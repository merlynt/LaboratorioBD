<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =
        [
            [
                'category' => 'Action',
                'description' => 'Movies that focus on adrenaline, confrontations, chases, and heroic acts. They often feature high-energy sequences, fight scenes, and special effects.'
            ],
            [
                'category' => 'Adventure',
                'description' => 'Movies that take characters on a journey filled with challenges, exploration, and discovery. They can include elements of fantasy or history.'
            ],
            [
                'category' => 'Comedy',
                'description' => 'Movies designed to make the audience laugh through humorous situations, funny characters, or witty dialogue.'
            ],
            [
                'category' => 'Drama',
                'description' => 'Movies that explore deep, serious themes about life, human relationships, and emotions. They usually focus on the internal conflicts of the characters.'
            ],
            [
                'category' => 'Science Fiction',
                'description' => 'Movies that explore the future, technological advancements, and often include elements like aliens, space travel, or alternate realities.'
            ],
            [
                'category' => 'Horror',
                'description' => 'Movies designed to scare and generate suspense. They often involve supernatural creatures, disturbing situations, or psychological fear.'
            ]            
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
