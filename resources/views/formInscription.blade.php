
@section('content')

    {!! Form::open(['url'=>'/login']) !!}

    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/login.css') !!}
    {!! Html::style('assets/css/style.css')!!}
    {!! Html::style('https://pro.fontawesome.com/releases/v5.1.0/css/all.css') !!}

    {!! Html::script('assets/js/jquery.min.js')  !!}
    {!! Html::script('assets/js/login.js') !!}
    {!! Html::script('assets/js/class/app.js') !!}

    <div class="container">
        <div id="login-box">
            <a href="{{url('/getLogin')}}"><i  id="btnRetour" title="Retour connexion" class='fas fa-arrow-left btnRetour'></i></a>
            <div class="logo">
                <img src="./../images/login.png" class="imgLogin img img-responsive img-circle center-block"/>
                <h1 class="logo-caption"><span class="tweak">I</span>nscription</h1>
            </div><!-- /.logo -->
            <form class="formulaire" action="inscrire.php" method="post">
                <div class="controls">
                    <input type="text" name="nom" placeholder="Votre nom" class="form-control" required />
                    <input type="text" name="prenom" placeholder="Votre prénom" class="form-control" required />
                    <br>
                    <input type="text" name="pseudo" placeholder="Votre Pseudo" class="form-control" required />
                    <input type="password" name="password" placeholder="Mot de passe" class="form-control mdp" required />
                    <input type="password" name="cpassword" placeholder="Confirmation mot de passe" class="form-control mdp" required />
                    <img src="./../images/eye.png" id="afficherMDP"  class="afficherMDP img img-responsive img-circle center-block">
                    <button type="submit" class="btn btn-default btn-block btn-custom">S'inscrire</button>
            </form>
        </div><!-- /.controls -->
    </div><!-- /#login-box -->
    </div><!-- /.container -->
    <div id="particles-js"></div>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->
    
    {!! Form::close() !!}

    <script type="text/javascript">
        var app = new app;
        app.mdpInscription($('#afficherMDP'));
    </script>
