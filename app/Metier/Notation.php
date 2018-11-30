<?php
/**
 * Created by PhpStorm.
 * User: Edgar
 * Date: 19/11/2018
 * Time: 16:47
 */

namespace App\Metier;


class Notation
{
    protected $table = 'Notation';
    public $timestamps = false;
    protected $fillable = [
        'idFilm',
        'idUtilisateur',
        'Date',
        'Note',
        'Commentaire'
    ];

    public function ajouterRealisteur(){

    }

    public function suprimerRealisteur(){

    }
}