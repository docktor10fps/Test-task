@extends('layouts.app')

@section('title', 'Список фільмів')

@section('content')
    <style>
        .card2 {

            border-qradius: 10px;
            width: 200px;
            margin: 10px;
            text-align: center;
            overflow: hidden;
        }
        .card2 img {
            width: 100%;
            height: auto;
        }
        .card2 h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }
        .card2 .genres {
            color: #555;
            font-size: 0.9em;
            padding-bottom: 10px;
        }
        .card1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            width: 400px;
        }

        .poster {
            width: 150px;
            height: 200px;
            background-color: #ccc;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
            margin-right: 15px;
        }

        .buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .buttons button {
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            cursor: pointer;
            background-color: #f5f5f5;
            width: 200px;
        }

        .buttons button:hover {
            background-color: #ddd;
        }
    </style>


    @foreach ($films as $film)
        <div class="card1">
            <div class="card2">
                <img src="{{ asset('storage/' .$film->poster ) }}" alt="Poster">
                <a href="{{route('film.show', $film->id)}}"><h3>{{ $film->name }}</h3></a>
                <div class="genres">
                    @foreach($film->genres as $genre)
                        {{ $genre->name }}
                    @endforeach
                </div>
            </div>
            <div class="buttons">
                <a  href="{{ route('film.edit', $film->id) }}">  <button type="submit" class="btn btn-outline-dark mr-2">Edit</button></a>
                @if($film->publication == 0)
                <a  href="{{ route('film.publication', $film->id) }}">  <button type="submit" class="btn btn-outline-dark mr-2">Publication</button></a>
                @endif
                <form action="{{ route('film.destroy', $film->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-dark mr-2" onclick="return confirm('Ви впевнені, що хочете видалити цей пост?');">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
