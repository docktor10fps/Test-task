<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\JsonResponse;


class FilmController extends Controller
{
    public function __invoke(): JsonResponse
    {
       $films = Film::paginate(10, page:1);
       return new JsonResponse($films);
    }
}
