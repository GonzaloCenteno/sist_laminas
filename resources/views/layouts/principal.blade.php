<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@yield('title')</title>  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" style="background: white;">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-parrot.png') }}" height="80" class="d-inline-block align-top"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item px-3">
                        <a href="#" class="nav-link text-muted h5">Inicio</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('lamina.index') }}" class="nav-link text-muted h5" href="#">Láminas</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('plan.index') }}" class="nav-link text-muted h5" href="#">Planes</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('contactanos.index') }}" class="nav-link text-muted h5" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('categoria.index') }}" class="nav-link text-muted h5" href="#">Ingresar</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="btn btn-rounded btn-outline-danger waves-effect nav-link" href="{{ url('login') }}">
                          <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> <span>Mi Cuenta</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"> LOGUEARSE</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
        <!--/.Navbar-->
    </header>


    <main role="main" class="pt-5 mt-5">
        @yield('content')
    </main>

    <footer class="page-footer font-small black py-4">
      <div class="footer-copyright text-center">
        <a href="https://mdbootstrap.com/" class="h5"> Copyright © 2021: Innova SAC All Rights Reserved.</a>
      </div>
    </footer>
    
</body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    @yield('page-js-script')
</html>
