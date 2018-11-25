<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use DB;
use App\Exceptions\MonException;

class Utilisateur extends Model {

    //On déclare la table utilisateur
    protected $table = 'UTILISATEUR';
    public $timestamps = false;
    protected $fillable = [
        'IDUTILISATEUR',
        'NOMUTIL',
        'PRENOMUTIL',
        'ADRUTIL',
        'PSEUDOU',
        'MDP',
        'MAIL',
        'ROLE'
    ];


    public function login($login, $pwd) {
        $connected = false;
        try {
            $Utilisateur = DB::table('UTILISATEUR')
                ->select()
                ->where('PSEUDOU', '=', $login)
                ->first();

            if ($Utilisateur) {
                 if ($Utilisateur->MDP == md5($pwd)) {
                    Session::put('ID', $Utilisateur->IDUTILISATEUR);
                    Session::put('ROLE', $Utilisateur->ROLE);
                    $connected = true;
                }
            }
        }
        catch (QueryException $e)
        {
            throw new MonException ($e->getMessage());
        }
        return $connected;
    }

    /**
     * Délogue l'utilisateur en mettant son Id à 0
     * dans la session => le menu n'est plus accessible
     */
    public function logout(){
        Session::put('ID', 0);
        Session::put('ROLE', 0);
    }
}
?>

