<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $filmTitles = [
            'The Shawshank Redemption',
            'The Godfather',
            'The Dark Knight',
            'Pulp Fiction',
            'Forrest Gump',
            'Inception',
            'Fight Club',
            'The Matrix',
            'The Lord of the Rings: The Return of the King',
            'The Lord of the Rings: The Fellowship of the Ring',
            'The Lord of the Rings: The Two Towers',
            'Interstellar',
            'The Avengers',
            'Gladiator',
            'The Departed',
            'The Usual Suspects',
            'The Good, the Bad and the Ugly',
            'Forest',
            'The Lion King',
            'Jurassic Park',
            'Saving Private Ryan',
            'Back to the Future',
            'The Terminator',
            'The Silence of the Lambs',
            'Parasite',
            'Psycho',
            'Casablanca',
            'Spirited Away',
            'Léon: The Professional',
            'The Dark Knight Rises',
            'The Social Network'
        ];


        foreach ( $filmTitles as $filmTitle) {
            DB::table('films')->insert([
                'name' => $filmTitle,
                'publication' => 0,
                'poster' => 'images/seed.jpg',
            ]);
        }

    }
}
