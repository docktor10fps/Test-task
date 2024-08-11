<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\RedirectResponse;

class FilmDestroyController extends Controller
{
    public function __invoke($id): RedirectResponse
    {
        $film = Film::find($id);
        $film->delete();

        return redirect()->route('film.index');
    }
}
