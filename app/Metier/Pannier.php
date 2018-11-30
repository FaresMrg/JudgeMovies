<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 19/11/2018
 * Time: 16:22
 */

namespace App\Metier;


class Pannier
{
    protected $table = 'Pannier';
    public $timestamps = false;
    protected $fillable = [
        'numPannier',
        'idUtilisateur',
        'datPannier',
        'montantPannier',
        'validation'
    ];

    public function ajouterPannier(){

    }

    public function suprimerPannier(){

    }
}