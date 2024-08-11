<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\JsonResponse;


class GenreIdController extends Controller
{
    public function __invoke(int $id) : JsonResponse
    {
       $genre = Genre::find($id);
        $films = $genre->films()->get();
       return new JsonResponse($films);
    }
}
