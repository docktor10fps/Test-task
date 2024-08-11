<?php

use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\FilmIdController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\GenreIdController;
use App\Http\Controllers\Films\FilmCreateController;
use App\Http\Controllers\Films\FilmDestroyController;
use App\Http\Controllers\Films\FilmEditController;
use App\Http\Controllers\Films\FilmIndexController;
use App\Http\Controllers\Films\FilmShowController;
use App\Http\Controllers\Films\FilmStoreController;
use App\Http\Controllers\Films\FilmUpdateController;
use App\Http\Controllers\Films\PublicationController;
use App\Http\Controllers\GenreFilms\GenreFilmsController;
use App\Http\Controllers\Genres\GenreCreateController;
use App\Http\Controllers\Genres\GenreDestroyController;
use App\Http\Controllers\Genres\GenreEditController;
use App\Http\Controllers\Genres\GenreIndexController;
use App\Http\Controllers\Genres\GenreStoreController;
use App\Http\Controllers\Genres\GenreUpdateController;
use App\Http\Controllers\Home\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', [IndexController::class, '__invoke'])->name('index');

// Film
Route::prefix('films')->group(function () {
    Route::get('/', [FilmIndexController::class, '__invoke'])->name('film.index');
    Route::get('/create', [FilmCreateController::class, '__invoke'])->name('film.create');
    Route::post('/store', [FilmStoreController::class, '__invoke'])->name('film.store');
    Route::get('/{id}', [FilmShowController::class, '__invoke'])->name('film.show');
    Route::get('/edit/{id}', [FilmEditController::class, '__invoke'])->name('film.edit');
    Route::put ('/update/{id}', [FilmUpdateController::class, '__invoke'])->name('film.update');
    Route::get('/publication/{id}', [PublicationController::class, '__invoke'])->name('film.publication');
    Route::delete('/delete/{id}', [FilmDestroyController::class, '__invoke'])->name('film.destroy');
});

// Genre
Route::prefix('genre')->group(function () {
    Route::get('/', [GenreIndexController::class, '__invoke'])->name('genre.index');
    Route::get('/create', [GenreCreateController::class, '__invoke'])->name('genre.create');
    Route::post('/store', [GenreStoreController::class, '__invoke'])->name('genre.store');
    Route::get('/{id}', [GenreFilmsController::class, '__invoke'])->name('genre');
    Route::get('/edit/{id}', [GenreEditController::class, '__invoke'])->name('genre.edit');
    Route::put('/update/{id}', [GenreUpdateController::class, '__invoke'])->name('genre.update');
    Route::delete('/delete/{id}', [GenreDestroyController::class, '__invoke'])->name('genre.destroy');
});
// 5 задание



