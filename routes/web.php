<?php


//connexion
route::get('/getLogin', 'UtilisateurController@getLogin');

//Authentifie l'utilisateur à partir du login et mdp saisis
route::post('/login','UtilisateurController@login');

route::get('/logout','UtilisateurController@logout');



//Inscription
route::get('/formInscription', function(){
    return view('formInscription');
});

//Film hazar
route::get('/filmHazar','FilmsController@filmHazar');

//Tous les films
route::get('/listeFilms','FilmsController@listeFilms');

// Tous les films accueil
route::get('/','FilmsController@listerFilmsAccueil')->name('home');

// films par genre
route::get('/listerFilmsGenre','FilmsController@listerFilmsGenre');


