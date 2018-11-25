@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row justify-content-md-center">
        <div class="videoFilm col-md-12">
            <iframe id="videoYT" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="col-md-12 descriptionFilm">
            <div class="hautTitre">
                <h2 id="titre">{{var_dump($filmHazar)}}</h2>
            </div>
            <div class="bas">
                <div class="lesCategories">
                </div>
                <div class="leTemps">
                    <p><i class="far fa-clock"></i>Durée: </p><p id="tempsFilm"></p><p>&nbsp;minutes</p>
                </div>
            </div>
            <hr class="separateur">
            <div class="sousDescription">
                <div class="sousResumer">
                    <div class="resumer">
                        <p id="resumer"></p>
                    </div>
                    <hr class="separateur"><i class="far fa-dot-circle"></i>
                    <div class="realisateur">
                        <p>Realisateur:</p>
                        <h5 id="realisateur"></h5>
                    </div>
                    <hr class="separateur"><i class="far fa-dot-circle"></i>
                    <div class="dateSortie">
                        <p>Date de sortie:</p>
                        <h5 id="dateSortie"></h5>
                    </div>
                    <hr class="separateur"><i class="far fa-dot-circle"></i>
                </div>
            </div>
        </div>

        <div class="col-md-12 noteCommentaire">
            <h5>Notez et commentez !!! <i class="far fa-laugh"></i></h5>
            <div class="noteEtoile">
                <img class="imgEtoile" alt="etoile vide" src="../images/etoiles/etoile-vide.png">
                <img class="imgEtoile" alt="etoile vide" src="../images/etoiles/etoile-vide.png">
                <img class="imgEtoile" alt="etoile vide" src="../images/etoiles/etoile-vide.png">
                <img class="imgEtoile" alt="etoile vide" src="../images/etoiles/etoile-vide.png">
                <img class="imgEtoile" alt="etoile vide" src="../images/etoiles/etoile-vide.png">
            </div>
            <div class="ecrireCom">
                <textarea class="form-control" placeholder="Comment avez-vous trouvé le film? Donnez votre avis !!! :D" rows="5"></textarea>
            </div>
        </div>
    </div>
</div>
{!! Html::script('assets/js/jquery.min.js')  !!}
{!! Html::script('assets/js/class/app.js')  !!}

<script type="text/javascript">


    $(function () { //Mettre les etoiles
        for (var i = 0; i < Math.trunc(film.note); i++) {
            $('.imgEtoile')[i].src = '../images/etoiles/etoile-pleine.png';
            $('.imgEtoile')[i].title = i+1+'/5';
            $('.imgEtoile')[i].alt = 'etoile pleine';
        }
        if (film.note-Math.trunc(film.note)) { //Pour la demi étoile
            $('.imgEtoile')[Math.trunc(film.note)].src = '../images/etoiles/etoile-demi.png';
            $('.imgEtoile')[Math.trunc(film.note)].title = film.note+'/5';
            $('.imgEtoile')[Math.trunc(film.note)].alt = 'demi étoile';
        }
    });
</script>
    @stop