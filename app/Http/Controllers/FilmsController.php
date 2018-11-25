<?php
/**
 * Created by PhpStorm.
 * User: Cytenisa
 * Date: 25/11/2018
 * Time: 19:25
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Request;
use App\metier\Films;
use App\Exceptions\MonException;
use Illuminate\Support\Facades\Session;

class FilmsController extends Controller
{
    // afficher tout les films de la bdd
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

// afficher tout les films de la bdd
    public function filmHazar() {
        try {
            $unFilmHazar = new Films();
            $filmHazar = $unFilmHazar->getFilmAleatoire();
            var_dump($filmHazar);
            return view('/film')->with('filmHazar', $filmHazar);
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('home', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('home', compact('erreur'));
        }
    }

}