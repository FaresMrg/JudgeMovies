<?php
/**
 * Created by PhpStorm.
 * User: Cytenisa
 * Date: 25/11/2018
 * Time: 19:25
 */

namespace App\Http\Controllers;


use Request;
use App\metier\Films;
use App\Exceptions\MonException;
use Illuminate\Support\Facades\Session;

class FilmsController extends Controller
{
    // afficher Tous les films page 'Tous les films'
    public function listeFilms() {
        try {
            $unFilm = new Films();
            $mesFilms = $unFilm->getListeFilms();
            return view('/allFilms')->with('mesFilms', $mesFilms);
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    // afficher Tous les films accueil
    public function listerFilmsAccueil() {
        try {
            $unFilmAcc = new Films();
            $lesFilms = $unFilmAcc->getListeFilmsAccueil();
            return view('/home', compact('lesFilms'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    // afficher Tous les films par genre
    public function listerFilmsGenre() {
        try {
            $genreId = $_GET['genre'];

            $unFilmGenre = new Films();
            $lesFilmsGenre = $unFilmGenre->getListeFilmsGenre($genreId);
            return view('/genreFilm')->with('lesFilmsGenre', $lesFilmsGenre);
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

// afficher Tous les films de la bdd
    public function filmHazar() {
        try {
            $unFilmHasard = new Films();
            $filmHasard = $unFilmHasard->getFilmAleatoire();

            return view('film')->with('filmHasard', $filmHasard);
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }













    // préajout de film
    public function preAddFilm(){
        if (Session::get('role')== "ADM"){
            try{
                $unGenre = new Genre();
                $lesGenres = $unGenre->listGenre();
                $unReal = new Realisateur();
                $lesReals = $unReal->listRealisateur();
                $unActeur = new Acteur();
                $lesActeurs = $unActeur->listActeur();

                return view('home',compact('lesGenres', 'lesReals','lesActeurs'));
            }catch (MonException $e){
                $erreur = $e->getMessage();
                return view('Error', compact('erreur'));
            }catch (Exception $e){
                $erreur = $e->getMessage();
                return view('Error', compact('erreur'));
            }
        }else {
            $erreur = 'Verifiez vos droits !';
            return view('Error', compact('erreur'));
        }
    }

    // valider ajout film
    public function validateFilm()
    {
        try{
            //$id_film = Request::input('Filmid');
            $nomFilm = Request::input('nom');
            $dateSortie = Request::input('date');
            $duree = Request::input('duree');
            $restrictionAge = Request::input('age');
            $resume = Request::input('resume');
            $prix = Request::input('prix');
            $nomimg = Request::input('nomimg');
            $lien = Request::input('lien');
            // $idGenre = Request::input('NOM_Du_Formulaire');
            //$preomActeur = Request::input('NOM_Du_Formulaire');
            //$nomActeur = Request::input('NOM_Du_Formulaire');
            //$nomRealisateur = Request::input('NOM_Du_Formulaire');
            //$prenomRealisateur = Request::input('NOM_Du_Formulaire');
            $unFilm = new Film();
            //if($id_film > 0){
            //$unFilm->modifierFilm($nomFilm, $dateSortie, $duree, $resume, $restrictionAge, $prix,  $idGenre, $preomActeur, $nomActeur, $nomRealisateur, $prenomRealisateur, $id_film);

            //}
            //else{
            $unFilm->ajouterFilm($nomFilm, $dateSortie, $duree, $resume, $restrictionAge, $prix, $nomimg, $lien);

            //}
            return view('test');
        }catch (MonException $e){

        }catch (Exception $e){

        }
    }


    // supprimer films
    public function supprimerFilm($unFilm){

    }

    // prémodification films
    public function preModifyFilm($id){
        try{
            $unFilm = new Film();
            $leFilm = $unFilm->getFilmById($id);
            return view('FormModifierFilm');
        }catch (Exception $e){
            $erreur = $e->getMessage();
            return view('Error',compact('erreur'));
        }
    }


}