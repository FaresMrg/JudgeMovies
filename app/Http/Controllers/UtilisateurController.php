<?php

namespace App\Http\Controllers;
use App\Exceptions\MonException;
use App\metier\Utilisateur;
use Request;


class UtilisateurController extends Controller {

    /**
     * Authentifie le visiteur
     * @return type Vue formLogin ou home
     */
    public function login() {
        $login = Request::input('pseudo');
        $pwd = Request::input('pwd');
        $unUtilisateur = new Utilisateur();
        try {
            $connected = $unUtilisateur->login($login, $pwd);
            return view('home');
        } catch(MonException $e) {
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin', compact('erreur'));
        }
    }

    /**
     * Déconnecte le visiteur authentifié
     * @return type Vue home
     */
    public function logout(){
        $unUtilisateur = new Utilisateur();
        $unUtilisateur->logout();
        return view('home');
    }

    /**
     * Initialise le formulaire d'authentification
     * @return type Vue formLogin
     */
    public function getLogin() {
        $erreur = "";
        return view ('formLogin', compact('erreur'));
    }

    public function signIn(){
        $login = Request::input('login');
        $pwd = Request::input('pwd');

        $unUtilisateur = new Utilisateur();
        $connected = $unUtilisateur->login($login,$pwd);
        if($connected){
            return view('home');
        }
        else{
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin',compact('erreur', $erreur));
        }
    }

    public function signOut(){
        $unUtilisateur = new Utilisateur();
        $unUtilisateur->logout();
        return view('home');
    }
}

