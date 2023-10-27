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

    <header class="text-bg-dark text-center py-4">
        <h1>
            {{$heading}}
        </h1>
    </header>

    <main class="text-bg-light">

        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
                @foreach ($movies as $movie)
                <div class="col">
                    <img src="https://picsum.photos/200/300" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            {{$movie['title']}}
                        </h5>
                        <p class="card-text">
                            Date: {{$movie['date']}} <br>
                            Nationality: {{$movie['nationality']}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </main>

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