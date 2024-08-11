
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Фільми')</title>


<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .cardCreate{}

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            margin: 10px;
            text-align: center;
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }
        .card .genres {
            color: #555;
            font-size: 0.9em;
            padding-bottom: 10px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: white;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        li a:hover:not(.active) {
            background-color: #a7e6c2;
        }

        .active {
            background-color: #a7e6c2;
        }
        body {
            padding: 20px;
        }
        .film-card {
            margin-bottom: 20px;
        }
        .film-poster {
            height: 200px;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #bbb;
        }
        .film-genres {
            font-size: 14px;
            color: #777;}
        /* Нові стилі для форми створення поста */
        .postForm {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 10px;
            text-align: center;
        }

        .postForm-header {
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }

        .postForm-body {
            padding: 40px;
        }

        .custom-form-group {
            margin-bottom: 20px;
        }

        .custom-input, .custom-textarea, .custom-file-input {
            border-radius: 10px;
            padding: 10px;
            border: 1px solid #ced4da;
            width: 100%;
        }

        .custom-button {
            border-radius: 10px;
            padding: 10px 0;
            width: 50%;
            background-color: #343a40;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }

        .custom-button:hover {
            background-color: #23272b;
        }

    </style>
</head>
<body>
<ul>
    <li><a class="active" href="{{route('index')}}">Films</a></li>
    <li><a href="{{route('genre.index')}}">Genres</a></li>
    <li><a href="{{route('film.create')}}">Add Film</a></li>
    <li><a href="{{route('genre.create')}}">Add Genre</a></li>
    <li><a href="{{route('film.index')}}">Publication</a></li>
</ul>
<!-- Контент111 -->
<div class="container">
    @yield('content')
</div>

<!-- Підключення JS файлів -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });

    });

</script>


</body>

</html>
