<?php

namespace App\Http\Controllers\GenreFilms;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\View\View;

class GenreFilmsController extends Controller
{
    public function __invoke($id) : View
    {
        $films = Film::whereHas('genres', function ($data) use ($id) {
            $data->where('genre_id', $id);
        })->get();
        return view('genre.genre-films', compact('films'));
    }
}
