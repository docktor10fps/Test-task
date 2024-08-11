@extends('layouts.app')

@section('content')
    <body class="justify-content-center align-items-center vh-100">
    <div class="col-md-10">
        <div class="postForm shadow-lg custom-card">
            <div class="postForm-header text-center bg-dark text-white custom-header">
                <h4>Create a New Film</h4>
            </div>
            <div class="postForm-body custom-body">
                <form action="{{route('film.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group custom-form-group">
                        <label for="title">Name:</label>
                        <input type="text" class="form-control custom-input" id="title" name="name" required>
                    </div>
                        <label for="genres">Genres:</label>

                    <select class="select2-multiple form-control" name="genres[]" multiple="multiple" id="select2Multiple">
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>



                    <div class="form-group mt-4 custom-form-group">
                        <label for="photo">Photo:</label>
                        <input type="file" class="form-control-file custom-file-input" id="photo" name="image">
                    </div>

                    <button type="submit" class="btn btn-dark btn-block mt-5 custom-button">Create</button>
                </form>
            </div>
        </div>
    </div>
    <script>$(document).ready(function() {
            $('#select2Multiple').select2();
        });</script>
    </body>
@endsection
