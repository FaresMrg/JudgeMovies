@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 toutLesFilms">
            <h1>Tous les films :</h1>
            <br>
            @foreach($lesFilmsGenre as $unFilmGenre)
                <img  style="width: 200px; height: 300px;" src="./../images/les_films/{{ $unFilmGenre->NOMIMAGE  }}"/>
            @endforeach
        </div>
    </div>

</div>
@stop