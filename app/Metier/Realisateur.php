<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 13/11/2018
 * Time: 21:37
 */

namespace App\Metier;


class Realisateur
{
    protected $table = 'REALISATEUR';
    public $timestamps = false;
    protected $fillable = [
        'idRealisateur',
        'nomReal',
        'prenomReal'
    ];

    public function ajouterRealisteur(){

    }

    public function suprimerRealisteur(){

    }
}
