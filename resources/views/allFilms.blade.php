@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 toutLesFilms">
            <h1>Tout les films :</h1>
            <br>
            @foreach($mesFilms as $unFilm)
                <img  style="width: 200px; height: 300px;" src="./../images/les_films/{{ $unFilm->NOMIMAGE  }}"/>
            @endforeach
        </div>
    </div>

</div>
@stop
