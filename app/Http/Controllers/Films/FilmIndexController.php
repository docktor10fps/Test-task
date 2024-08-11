<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\View\View;

class FilmIndexController extends Controller
{
    public function __invoke(): View
    {
       $films = Film::all();
       return view('film.index', compact('films'));
    }
}
