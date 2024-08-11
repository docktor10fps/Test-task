@extends('layouts.app')

@section('content')
    <body class="justify-content-center align-items-center vh-100">
    <div class="col-md-10">
        <div class="postForm shadow-lg custom-card">
            <div class="postForm-header text-center bg-dark text-white custom-header">
                <h4>Create a New Film</h4>
            </div>
            <div class="postForm-body custom-body">
                <form action="{{route('genre.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group custom-form-group">
                        <label for="title">Name:</label>
                        <input type="text" class="form-control custom-input" id="title" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block mt-5 custom-button">Create </button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection
