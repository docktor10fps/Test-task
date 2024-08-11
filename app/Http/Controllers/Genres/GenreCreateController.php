<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\View\View;


class GenreCreateController extends Controller
{
    public function __invoke(): View
    {
        return view('genre.create');
    }
}
