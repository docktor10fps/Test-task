<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\JsonResponse;


class GenreController extends Controller
{
    public function __invoke(): JsonResponse
    {
       $genre = Genre::paginate(10, page:1);
       return new JsonResponse($genre);
    }
}
