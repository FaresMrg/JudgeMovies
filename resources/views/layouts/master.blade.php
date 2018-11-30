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

    {!! Html::script('assets/js/jquery.min.js')  !!}
    {!! Html::script('assets/js/jquery-ui.min.js')  !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/slick.min.js')  !!}
    {!! Html::script('assets/js/popper.min.js')  !!}
    {!! Html::script('assets/js/class/app.js')  !!}
    {!! Html::script('assets/js/menu.js')  !!}
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="accueil.html">
            <img src="../images/logo.png" height="50" width="50" alt="Accueil" title="Accueil">
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}"><i class="fas fa-home"></i> Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/listeFilms')}}">Tous les films</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Par genre</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach($genres as $unGenre)
                            <a class="dropdown-item" href="{{url('/listerFilmsGenre?genre=' . $unGenre->IDGENRE)}}">{{ $unGenre->LIBELLEGENRE }}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}"><i class="fas fa-trophy-alt"></i> Classement</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/filmHazar')}}"><i class="fal fa-dice"></i> Film aléatoire</a>
                </li>
                @if(Session::get('ROLE') == 'ADM')
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}"><i class="fa fa-plus "></i> Ajouter Film</a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}"><i class="fa fa-cart-arrow-down"></i> Panier</a>
                </li>
                @if(Session::get('ID')> 0)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/logout')}}"><i class="fas fa-sign-out"></i> Deconnexion</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @if(Session::get('ID')<=0)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/getLogin')}}"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    @yield('content')
</div>

</body>
</html>










