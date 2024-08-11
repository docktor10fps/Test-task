<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\UpdateRequest;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class GenreUpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id): RedirectResponse
    {
        $genre = Genre::findOrFail($id);
        $genre->update($request->validated());

        return redirect()->route('genre.index');
    }
}
