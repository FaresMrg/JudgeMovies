<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Metier\Films;
use App\Exceptions\MonException;

class AppServiceProvider extends ServiceProvider
{


    // afficher tout les genres
    public function listerGenre() {
        try {
            $unGenres = new Films();
            $lesGenres = $unGenres->getListeGenre();
            return $lesGenres;
        } catch (MonException $e) {
            return $e;
        } catch (Exception $ex) {
            return $ex;
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $genres = $this->listerGenre();
        view()->share('genres', $genres);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
