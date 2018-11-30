<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 19/11/2018
 * Time: 16:41
 */

namespace App\Metier;


class Realise
{
    protected $table = 'REALISE';
    public $timestamps = false;
    protected $fillable = [
        'idRealisateur',
        'idFilm',
    ];

    public function ajouterRealise(){

    }

    public function suprimerRealise(){

    }
}