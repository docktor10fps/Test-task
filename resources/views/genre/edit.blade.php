@extends('layouts.app')

@section('content')
    <body class="justify-content-center align-items-center vh-100">
    <div class="col-md-10">
        <div class="postForm shadow-lg custom-card">
            <div class="postForm-header text-center bg-dark text-white custom-header">
                <h4>Edit Genre</h4>
            </div>
            <div class="postForm-body custom-body">
                <form action="{{route('genre.update', $genre->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group custom-form-group">
                        <label for="title">Name:</label>

                        <textarea name="name" id="content" class="form-control">{{ old('name', $genre->name) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block mt-5 custom-button">Update </button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
