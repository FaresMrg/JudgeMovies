@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 slideshow">
            <label for="filmBoxOffice">Film Box-office :</label>
            <div id="filmBoxOffice" class="slideContainer">
                @foreach($lesFilms as $film)
                    <div class="divImageSlick">
                        <img src="./../images/les_films/{{$film->NOMIMAGE}}" class="imageSlick" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@stop