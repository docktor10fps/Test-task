@extends('layouts.app')

@section('title', 'Список фільмів')

@section('content')

    <h1>List</h1>
    <div class="container">
        @foreach($films as $film)
            <div class="card">
                <img src="{{ asset('storage/' .$film->poster ) }}" alt="Poster">
                <a href="{{route('film.show', $film->id)}}"><h3>{{ $film->name }}</h3></a>
                <div class="genres">
                    @foreach($film->genres as $genre)
                        {{ $genre->name }}
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
