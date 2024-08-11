<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\JsonResponse;


class FilmIdController extends Controller
{
    public function __invoke(int $id): JsonResponse
    {
       $film = Film::find($id);
       return new JsonResponse($film);
    }
}
