<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\View\View;

class GenreEditController extends Controller
{
    public function __invoke($id): View
    {
        $genre = Genre::findOrFail($id);

        return view('genre.edit', compact('genre'));
    }
}
