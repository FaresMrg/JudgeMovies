<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 19/11/2018
 * Time: 16:41
 */

namespace App\Metier;


class Jouer
{
    protected $table = 'Jouer';
    public $timestamps = false;
    protected $fillable = [
        'DateCom',
        'montantCom'
    ];

    public function ajouterJouer(){

    }

    public function suprimerJouer(){

    }
}