<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JudgeMovies</title>
    <link rel="shortcut icon" href="../images/favicon.ico">
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/jquery-ui.min.css') !!}
    {!! Html::style('assets/css/slick.css') !!}
    {!! Html::style('assets/css/slick-theme.css') !!}
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('https://pro.fontawesome.com/releases/v5.1.0/css/all.css') !!}
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="../images/logo.png" height="50" width="50" alt="Accueil" title="Accueil">
        </a>
        @if (Session::get('ID') > 0)
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/listeFilms')}}">Tous les films</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Par genre</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('')}}">Action</a>
                        <a class="dropdown-item" href="{{url('')}}">Aventure</a>
                        <a class="dropdown-item" href="{{url('')}}">Animation</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}"><i class="fas fa-trophy-alt"></i> Classement</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/filmHazar')}}"><i class="fal fa-dice"></i> Film aléatoire</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}"><i class="fa fa-cart-arrow-down"></i> Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}"><i class="fas fa-sign-in-alt"></i> Deconnexion</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            @endif
            <ul class="navbar-nav">
                @if (Session::get('ID') == 0)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/getLogin')}}"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    </li>
            </ul>
        </div>
            @endif
    </nav>
    @yield('content')
</div>
{!! Html::script('assets/js/jquery.min.js')  !!}
{!! Html::script('assets/js/jquery-ui.min.js')  !!}
{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/slick.min.js')  !!}
{!! Html::script('assets/js/popper.min.js')  !!}
{!! Html::script('assets/js/class/app.js')  !!}
{!! Html::script('assets/js/menu.js')  !!}
</body>
</html>










