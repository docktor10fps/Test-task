<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\View\View;

class FilmEditController extends Controller
{
    public function __invoke(int $id): View
    {
        $film = Film::find($id);
        $film->genres()->detach();
        $genres = Genre::all();
        return view('film.edit', compact('film', 'genres'));
    }
}
