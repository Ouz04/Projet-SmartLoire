<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">


    <!-- Styles -->

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo.png')}}" width="80px" class="pr-3" style="border-right: solid 1px #333;">
                    <span class="pl-3">SmartLoire</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://localhost:8000/" id="navbardrop" data-toggle="dropdown">Home<span class="sr-only">(current)</span></a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="http://127.0.0.1:8000/presentation"> Projet SmartLoire </a>
                                <a class="dropdown-item" href="#">Défis</a>
                                <a class="dropdown-item" href="#">Home3</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pageNews" data-toggle="dropdown">
                                Actualités
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Séminaires</a>
                                <a class="dropdown-item" href="#">Evénements</a>


                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pageSubmenu" data-toggle="dropdown">
                                Productions
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Démos </a>
                                <a class="dropdown-item" href="#">Logiciels</a>


                            </div>
                        </li>
                        <a class="nav-item nav-link" href="http://127.0.0.1:8000/partenaire">Partenaires</a>




                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pageMembre" data-toggle="dropdown">
                                Membres
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Stagiaires </a>
                                <a class="dropdown-item" href="#">Doctorants</a>
                                <a class="dropdown-item" href="#">Post-Doctorants</a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="pagePhotos" data-toggle="dropdown">
                                Divers
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Intranet </a>
                                <a class="dropdown-item" href="#">Vidéos</a>

                            </div>
                        </li>

                        <a class="nav-item nav-link" href="http://127.0.0.1:8000/contact">Contact</a>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>





        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
