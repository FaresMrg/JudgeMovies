
@section('content')

    {!! Form::open(['url'=>'/login']) !!}

    {!! Html::script('assets/js/jquery.min.js')  !!}
    {!! Html::script('assets/js/login.js') !!}

    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/login.css') !!}
    {!! Html::style('assets/css/style.css')!!}
    {!! Html::style('https://pro.fontawesome.com/releases/v5.1.0/css/all.css') !!}



    <div class="container">
        <i id="login-box">
            <a href="{{url('/formLogin')}}">
                <i id="btnRetour" title="Retour accueil" class='fas fa-arrow-left btnRetour' >
                </i>
            </a>
        </i>

            <div class="logo">
                <img src="../images/login.png" class="imgLogin img img-responsive img-circle center-block"/>
                <h1 class="logo-caption"><span class="tweak">I</span>nscription</h1>
            </div><!-- /.logo -->
            <div class="form-horizontal">
                <div class="controls">
                    <div class="form-group">
                        <input type="text" name="nom" placeholder="Nom" class="form-control" required />
                        <input type="text" name="prenom" placeholder="Prénom" class="form-control" required />
                        <input type="text" name="pseudo" placeholder="Pseudo" class="form-control" required />
                        <input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control" required />
                        <img src="../images/eye.png" id="afficherMDP" class="afficherMDP img img-responsive img-circle center-block">
                        <button type="submit" class="btn btn-default btn-block btn-custom">Inscription</button>

                    </div>
                </div>
            </div>
    </div>
    <div id="particles-js"></div>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->
    
    {!! Form::close() !!}