<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Film;
use Illuminate\View\View;

class FilmShowController extends Controller
{
    public function __invoke(int $id): View
    {
        $film = Film::find($id);
        return view('film.show', compact('film'));
    }
}
