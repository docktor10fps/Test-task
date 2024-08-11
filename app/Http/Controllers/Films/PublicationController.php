<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\RedirectResponse;

class PublicationController extends Controller
{
    public function __invoke(int $id): RedirectResponse
    {
        Film::where('id', $id)->update(['publication' => 1]);

        return redirect()->route('film.index');
    }
}
