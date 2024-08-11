<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Http\Requests\Film\UpdateRequest;
use App\Models\Film;
use App\Service\FilmService;
use Illuminate\Http\RedirectResponse;

class FilmUpdateController extends Controller
{
    protected $filmService;

    public function __construct(FilmService $filmService)
    {
        $this->filmService = $filmService;
    }

       public function __invoke(UpdateRequest $request, int $id): RedirectResponse
   {
       $this->filmService->update($request, $id);

       return redirect()->route('film.index');
   }
}
