<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;


class GenreDestroyController extends Controller
{

    public function __invoke($id): RedirectResponse
    {
        $data = Genre::findOrFail($id);
        $data->delete();
        return redirect()->route('genre.index');
    }
}
