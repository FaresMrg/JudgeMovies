<?php
/**
 * Created by PhpStorm.
 * User: Cytenisa
 * Date: 28/11/2018
 * Time: 15:34
 */

namespace App\Metier;


class Appartient extends Model
{
    protected $table = 'appartient';
    public $timestamps = false;
    protected $fillable = [
        'idFilm',
        'idGenre'
    ];

    public function ajouterAppartient(){

    }

    public function supprimerAppartient(){

    }
}