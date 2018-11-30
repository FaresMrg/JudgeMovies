<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 19/11/2018
 * Time: 16:45
 */

namespace App\Metier;


class Contient
{
    protected $table = 'Contient';
    public $timestamps = false;
    protected $fillable = [
        'numPannier',
        'idFilm'
    ];

    public function ajouterContient(){

    }

    public function supprimerContient(){

    }
}