<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\CreateRequest;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;

class GenreStoreController extends Controller
{
    public function __invoke(CreateRequest $request): RedirectResponse
    {
        $genre = $request->validated();
        Genre::firstOrCreate($genre);

        return redirect()->route('genre.index');
    }
}
