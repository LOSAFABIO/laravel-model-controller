@extends('layouts.app')

@section('film-box')
    <div class="cards">
        <div class="container-film">
            @foreach ($movies as $indice => $elemento)
            <div class="card">
                <h3>Titolo : {{$elemento->title}}</h3>
                <p>Titolo-originale : {{$elemento->original_title}}</p>
                <p>Nazionalità : {{$elemento->nationality}}</p>
                <p>Data : {{$elemento->date}}</p>
                <p>Voto : {{$elemento->vote}}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection