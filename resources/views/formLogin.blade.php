

@section('content')

{!! Form::open(['url'=>'/login']) !!}

{!! Html::script('assets/js/jquery.min.js')  !!}
{!! Html::script('assets/js/login.js') !!}

{!! Html::style('assets/css/bootstrap.min.css') !!}
{!! Html::style('assets/css/login.css') !!}
{!! Html::style('assets/css/style.css')!!}
{!! Html::style('https://pro.fontawesome.com/releases/v5.1.0/css/all.css') !!}



<div class="container">
    <div id="login-box">
        <a href="{{url('/')}}"> <i id="btnRetour" title="Retour accueil" class='fas fa-arrow-left btnRetour' ></i></a>
        <div class="logo">
            <img src="../images/login.png" class="imgLogin img img-responsive img-circle center-block"/>
            <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
        </div><!-- /.logo -->
        <div class="form-horizontal">
            <div class="controls">
                <div class="form-group">
                    <input type="text" name="login" placeholder="Pseudo" class="form-control" required />
                    <input id="pwd" type="password" name="pwd" placeholder="Mot de passe" class="form-control" required />
                    <img src="../images/eye.png" id="afficherMDP" class="afficherMDP img img-responsive img-circle center-block">
                    <button type="submit" class="btn btn-default btn-block btn-custom">Login</button>
                    <center>
                        <a style="color:#6897BB;" href="{{url('/formInscription')}}">Cliquez-ici pour vous inscrire.</a>
                    </center>
                </div><!-- /.controls -->
            </div>
        </div>
    </div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"></div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->
{!! Form::close() !!}