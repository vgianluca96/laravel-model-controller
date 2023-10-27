
@extends('app')

@section('main-content')

<main class="py-4">

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

@endsection
