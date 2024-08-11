<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $films = Film::where('publication', 1)->get();
       return view('index', compact('films'));
    }
}
