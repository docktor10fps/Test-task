<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreId = Genre::pluck('id')->toArray();
        $filmId = Film::pluck('id')->toArray();

        // Вставка даних у проміжну таблицю
        foreach (range(1, 30) as $index) {
            DB::table('genre_film')->insert([
                'genre_id' => $genreId[array_rand($genreId)],
                'film_id' => $filmId[array_rand($filmId)],
            ]);
        }
    }
}
