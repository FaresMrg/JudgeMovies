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

class Films
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

    // affiche tout les films de la bdd
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

    // affiche un film aleatoire de la bdd
    public function getFilmAleatoire() {
        try {
            $mesFilms = DB::table('FILM')
                ->Select('IDFILM', 'NOMFILM', 'NOMIMAGE', 'RESUME','DUREE','DATESORTIE','REALISATEUR','GENRE')
                ->join('APPARTIENT', 'APPARTIENT.IDFILM', '=', 'FILM.IDFILM')
                ->join('GENRE', 'GENRE.IDGENRE', '=', 'FILM.IDGENRE')
                ->join('REALISER', 'REALISER.IDFILM', '=', 'FILM.IDFILM')
                ->join('REALISATEUR', 'REALISATEUR.IDREALISATEUR', '=', 'FILM.IDREALISATEUR')
                ->inRandomOrder('IDFLIM')
                ->limit(1)
                ->get();

            return $mesFilms;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }
}