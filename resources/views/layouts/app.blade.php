<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Secretaria General de Posgrado - Universidad Nacional del Nordeste </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<style>
    body{
        font-family: 'Nunito', sans-serif;
        background-color: white;
    }

.table-tip td.fit,
.table-tip th.fit {
    white-space: nowrap;
    width: 1%;
}

</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo.png')}}" width="auto" height="50" class="d-inline-block align-top" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link  align-middle" href="/">
                               <h6 class="text-center"><b>Noticias</b></h6>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link  align-middle" href="/carreras">
                               <h6 class="text-center"><b>Carreras</b></h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  align-middle" href="/tramites">
                               <h6 class="text-center"><b>Guia de Trámites</b></h6>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link  align-middle" href="/formacion">
                               <h6 class="text-center"><b>Formación continua</b></h6>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link  align-middle" href="/becas">
                               <h6 class="text-center"><b>Becas y Subsidios</b></h6>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link  align-middle" href="/eventos">
                               <h6 class="text-center"><b>Eventos</b></h6>
                            </a>
                        </li>


                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><h6>{{ __('Iniciar Sesión') }}</h6></a>
                            </li>
                            {{-- <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li> --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    {{-- ///menu de usuario --}}
                                    <a class="dropdown-item" href="/gestion/carreras">Carreras
                                    </a>
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
        <footer class="footer">

        <img src="{{asset('img/footer.png')}}" class="img-responsive">

    </footer>
    </div>
</body>
</html>
{{-- <span class="text-muted text-center">
            Secretaría de Posgrado :: Universidad Nacional del Nordeste
        </span></br>
        <span class="text-muted text-center">
25 de Mayo 868 1° Piso, Corrientes (3400), Argentina :: +54 379 4474186 :: +54 379 4425060 int. 119 :: posgrado@unne.edu.ar :: gndapozo@unne.edu.ar
        </span> --}}
