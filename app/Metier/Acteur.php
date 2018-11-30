<?php
/**
 * Created by PhpStorm.
 * User: Cytenisa
 * Date: 28/11/2018
 * Time: 15:33
 */

namespace App\Metier;


class Acteur extends Model
{
    protected $table = 'Acteur';
    public $timestamps = false;
    protected $fillable = [
        'idActeur',
        'nomActeur',
        'prenomActeur'

    ];

    // ajouter un acteur
    public function ajouterActeur(){

    }

    // supprimer un acteur
    public function supprimerActeur(){

    }

    // modifier un acteur
    public function modifierActeur(){

    }
}