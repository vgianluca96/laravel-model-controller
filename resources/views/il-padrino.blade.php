@extends('layouts.app')

@section('main-content')

<div class="il-padrino">

</div>

<div class="container mt-4">
    <div class="py-4">
        <h2>
            {{$heading}}
        </h2>
    </div>
    <div class="w-50">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Titolo originale: </strong>{{$movies[0]['original_title']}}
            </li>
            <li class="list-group-item">
                <strong>Nazionalità: </strong>{{$movies[0]['nationality']}}
            </li>
            <li class="list-group-item">
                <strong>Data uscita: </strong>{{$movies[0]['date']}}
            </li>
            <li class="list-group-item">
                <strong>Voto: </strong>{{$movies[0]['vote']}}
            </li>
          </ul>
    </div>

</div>

@endsection