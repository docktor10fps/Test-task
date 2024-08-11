<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\View\View;

class FilmCreateController extends Controller
{
    public function __invoke(): View
    {
        $genres = Genre::all();
        return view('film.create', compact('genres'));
    }
}
