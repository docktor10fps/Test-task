<?php

use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\FilmIdController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\GenreIdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/films', [FilmController::class, '__invoke'])->name('film.api');
Route::get('/films/{id}', [FilmIdController::class, '__invoke'])->name('filmId.api');

Route::get('/genre', [GenreController::class, '__invoke'])->name('genre.api');
Route::get('/genre/{id}', [GenreIdController::class, '__invoke'])->name('genreId.api');


