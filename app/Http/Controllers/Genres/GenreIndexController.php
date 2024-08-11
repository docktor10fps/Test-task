<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\View\View;


class GenreIndexController extends Controller
{
    public function __invoke(): View
    {
        $genres = Genre::all();
        return view('genre.index', compact('genres'));
    }
}
