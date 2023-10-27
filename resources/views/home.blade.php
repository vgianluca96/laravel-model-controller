
@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="py-2">
        <h2>
            {{$heading}}
        </h2>
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <img src="https://picsum.photos/400/500" alt="" class="card-img-top">
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
        </div>
        @endforeach
    </div>
</div>

@endsection
