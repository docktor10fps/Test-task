<?php

namespace App\Service;

use App\Models\Film;

class FilmService
{
    public function store($request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        else {
            $imagePath = 'images/defolt.jpg';
        } ;


        $data =  $request->validated();
        $film = Film::firstOrCreate([
            'name'=>$data['name'],
            'poster' =>  $imagePath,
            'publication' => 0
        ]);
        $film->genres()->attach($data['genres']);
    }

    public function update($request, $id)
    {
        $imagePath = null;
        $film = Film::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        else {
            $imagePath = 'images/defolt.jpg';
        } ;
        $data =  $request->validated();

        $film->update([
            'name'=>$data['name'],
            'poster' =>  $imagePath,
        ]);
        $film->genres()->attach($data['genres']);
    }
}
