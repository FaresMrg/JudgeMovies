<?php

Route::get('/', function () {
    return view('home');
});

//connexion
route::get('/getLogin', 'UtilisateurController@getLogin');  //Emmene a la page login

//Authentifie le visiteur à partir du login et mdp saisis
route::post('/login','UtilisateurController@signIn');

route::get('/logout', 'UtilisateurController@logout');


/*route::get('/formLogin',function(){
    return view('formLogin');
});*/

//Inscription
route::get('/formInscription', function(){
    return view('formInscription');
});

//Film hazar
route::get('/filmHazar','FilmsController@filmHazar');

//Tout les films
route::get('/listeFilms','FilmsController@listeFilms');



//Tout les films
/*route::get('/allFilms',function(){
    return view('allFilms');
});*/

//Film aléatoire
/*route::get('/film',function(){
    return view('film');
});*/
