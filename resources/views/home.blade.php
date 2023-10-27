<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1>hello</h1>

    @foreach ($movies as $movie)
    <div class="py-4">
        {{$movie['id']}} <br>
        {{$movie['title']}} <br>
        {{$movie['original_title']}} <br>
        {{$movie['nationality']}} <br>
        {{$movie['date']}} <br>
        {{$movie['vote']}} <br>
    </div>
        
    @endforeach

</body>

</html>