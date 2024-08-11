<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Service\FilmService;
use App\Http\Requests\Film\CreateRequest;
use App\Models\Film;
use Illuminate\Http\RedirectResponse;

class FilmStoreController extends Controller
{
    protected $filmService;

    public function __construct(FilmService $filmService)
    {
        $this->filmService = $filmService;
    }

    public function __invoke(CreateRequest $request): RedirectResponse
    {
        $this->filmService->store($request);

        return redirect()->route('film.index');
    }
}
