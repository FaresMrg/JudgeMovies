@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 toutLesFilms">
            <h1>Tout les films:</h1>
        </div>
    </div>

</div>
{!! Html::script('assets/js/jquery.min.js')  !!}
{!! Html::script('assets/js/class/app.js')  !!}
<script>
    var app = new app;
    var lesFilms = [
        'Avengers_infinity_war.jpg',
        'Les_indestructibles_2.jpg',
        'ca_2.jpg',
        'Venom.jpg',
        'Annabelle_2.jpg',
        'Les_minions.jpg',
    ];

    for (var i = 0; i < lesFilms.length; i++) {
        lesFilms[i] = './../images/les_films/' + lesFilms[i];
    }

    $('.toutLesFilms').append(app.toutLesFilms(lesFilms));
</script>

@stop

