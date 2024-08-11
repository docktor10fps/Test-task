@extends('layouts.app')

@section('title', 'film list')

@section('content')
    <style>
        .button-group {
            display: flex;
            gap: 10px;
        }

        .custom-button {
            border-radius: 5px;
            padding: 10px 20px;
            flex: 1;
        }
    </style>
    <h1>Genres</h1>
    <div class="container">
        @foreach($genres as $genre)
            <div class="card">
                <h3>{{ $genre->name }}</h3>
                <div class="button-group">
                    <a class="nav-link" href="{{ route('genre.edit', $genre->id) }}">  <button type="submit" class="btn btn-outline-dark mr-2">Edit</button></a>
                    <form action="{{ route('genre.destroy', $genre->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-dark mr-2" onclick="return confirm('Ви впевнені, що хочете видалити цей пост?');">Delete</button>
                    </form>
                </div>
                <a class="nav-link" href="{{ route('genre', $genre->id) }}">  <button type="submit" class="btn btn-outline-dark mr-2">Films</button></a>

            </div>
        @endforeach
    </div>
@endsection
