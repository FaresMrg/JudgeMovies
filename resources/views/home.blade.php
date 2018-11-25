@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 slideshow">
            <label for="filmBoxOffice">Film Box-office :</label>
            <div id="filmBoxOffice" class="slideContainer"></div>
            <!-- <div class="divImageSlick">
                    <img src="depuislabdd" class="imageSlick" alt="">
                </div> -->
        </div>

        <div class="col-md-12 slideshow">
            <label for="topFilm">Top film :</label>
            <div id="topFilm" class="slideContainer"></div>
        </div>

        <div class="col-md-12 slideshow">
            <label for="filmParGenre">Film par genre :</label>
            <div id="filmParGenre" class="slideContainer"></div>
        </div>

        <div class="col-md-12 slideshow">
            <label for="filmAuHasard">Film au hasard :</label>
            <div id="filmAuHasard" class="slideContainer"></div>
        </div>

    </div>


</div>

@stop