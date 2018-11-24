<?php

Route::get('/', function () {
    return view('home');
});

//connexion
route::get('/formLogin',function(){
    return view('formLogin');
});

//Inscription
route::get('/formInscription', function(){
    return view('formInscription');
});

//Tout les films
route::get('/allFilms',function(){
    return view('allFilms');
});
