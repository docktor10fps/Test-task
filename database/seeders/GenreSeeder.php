<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $genres = [
            'Action',
            'Adventure',
            'Comedy',
            'Drama',
            'Fantasy',
            'Historical',
            'Horror',
            'Science Fiction',
            'Romance',
            'Thriller',
            'Mystery',
            'Crime',
            'Documentary',
            'Animation',
            'Psychological',
            'Superhero',
            'Sports',
            'Sci-Fi Thriller',
            'Urban',
            'Teen',
            'Cult',
            'Music'
        ];
        foreach ($genres as $genre) {
            DB::table('genres')->insert([
                'name' => $genre,
            ]);

        }
    }
}
