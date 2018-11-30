<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 13/11/2018
 * Time: 21:38
 */

namespace App\Metier;


class Genre
{
    protected  $table = 'GENRE';
    public $timestamps = false;
    protected  $fillable = [
        'idGenre',
        'libelleGenre'
    ];

    public function ajouterGenre(){

    }

    public function suprimerGenre(){

    }
}
