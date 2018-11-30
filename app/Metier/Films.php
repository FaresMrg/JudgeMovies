<?php
/**
 * Created by PhpStorm.
 * User: Cytenisa
 * Date: 25/11/2018
 * Time: 19:18
 */

namespace App\Metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use DB;
use App\Exceptions\MonException;

class Films extends Model
{
    //On déclare la table Films
    protected $table = 'FILM';
    public $timestamps = false;
    protected $fillable = [
        'IDFILM',
        'NOMFILM',
        'DATESORTIE',
        'DUREE',
        'RESUME',
        'RESTRICTIONAGE',
        'PRIX',
        'NOMIMAGE',
        'LIENBA'
    ];
    public $timetamps = true;

    // affiche Tous les films page Tous les films
    public function getListeFilms() {
        try {
            $mesFilms = DB::table('FILM')
                ->Select('NOMIMAGE')
                ->get();
            return $mesFilms;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }

    // affiche Tous les films Accueil
    public function getListeFilmsAccueil() {
        try {
            $lesFilms = DB::table('FILM')
                ->Select('NOMIMAGE')
                ->get();
            return $lesFilms;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }


    // affiche tout les genre
    public function getListeGenre() {
        try {
            $lesGenres = DB::table('GENRE')
                ->Select('IDGENRE','LIBELLEGENRE')

                ->get();
            return $lesGenres;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }


    // films par genre
        public function getListeFilmsGenre($genre) {
        try {
            $lesFilms = DB::table('FILM')
                ->Select('NOMIMAGE', 'NOMFILM', 'LIBELLEGENRE')
                ->join('APPARTIENT', 'APPARTIENT.IDFILM', '=', 'FILM.IDFILM')
                ->join('GENRE', 'GENRE.IDGENRE', '=', 'APPARTIENT.IDGENRE')
                ->where('GENRE.IDGENRE','=',$genre)
                ->get();
            return $lesFilms;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }



    // affiche un film aleatoire de la bdd
    public function getFilmAleatoire() {
        try {
            $mesFilms = DB::table('FILM')
                ->Select('FILM.IDFILM', 'NOMFILM', 'NOMIMAGE', 'RESUME','DUREE','DATESORTIE','NOMREAL', 'PRENOMREAL','LIBELLEGENRE', 'LIENBA')
                ->join('APPARTIENT', 'APPARTIENT.IDFILM', '=', 'FILM.IDFILM')
                ->join('GENRE', 'GENRE.IDGENRE', '=', 'APPARTIENT.IDGENRE')
                ->join('REALISE', 'REALISE.IDFILM', '=', 'FILM.IDFILM')
                ->join('REALISATEUR', 'REALISATEUR.IDREALISATEUR', '=', 'REALISE.IDREALISATEUR')
                ->inRandomOrder()
                ->first();

            return $mesFilms;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }
}