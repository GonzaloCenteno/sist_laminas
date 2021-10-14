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
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" style="background: white;">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-parrot.png') }}" height="70" class="d-inline-block align-top"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item px-3">
                        <a href="{{ route('index') }}" class="nav-link text-muted h5 {{ request()->is('/') ? 'MenuActive' : '' }}">Inicio</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('lamina.index') }}" class="nav-link text-muted h5" href="#">Láminas</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('planes.index') }}" class="nav-link text-muted h5 {{ request()->is('planes') ? 'MenuActive' : '' }}" href="#">Planes</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('contactanos.index') }}" class="nav-link text-muted h5 {{ request()->is('contactanos') ? 'MenuActive' : '' }}" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="{{ route('categoria.index') }}" class="nav-link text-muted h5" href="#">Ingresar</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <button class="btn btn-rounded btn-outline-danger waves-effect nav-link" id="btnIngresar">
                          <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> <span>Ingresar</span>
                          <!-- href="{{ url('login') }}" -->
                        </button>
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

    <div class="container-fluid my-5" style="border-top: 1px solid #9c9c9c;"></div>
    
    <div class="container py-5 mt-5">
        <div class="row">
            <div class="col-4">
                <div class="row pb-3">
                    <div class="col">
                        <img src="{{ asset('img/logo-parrot.png') }}" class="img-fluid">    
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted font-weight-bold">Editorial Innova SAC</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted">Calle Malecon Miramar 934</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted">Lima Perú.</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted">Telf. 948600546</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted">Email: info@laminaseducativas.com</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('img/FAC.png') }}" class="img-fluid">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/TWITT.png') }}" class="img-fluid">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/PINT.png') }}" class="img-fluid">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/INSTA.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-bold pb-4">Láminas Escolares</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">About Us</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Contact Us</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Plugins</h5>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-bold pb-4">Recursos</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Nuestra Empresa</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Themes</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Contact Us</h5>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-bold pb-4">Novedades</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">About Us</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Contact Us</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Plugins</h5>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-bold pb-4">Ayuda y Preguntas</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Nuestra Empresa</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Themes</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-muted pb-2">Contact Us</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="page-footer font-small black py-4">
      <div class="footer-copyright text-center">
        <a href="https://mdbootstrap.com/" class="h5"> Copyright © 2021: Innova SAC All Rights Reserved.</a>
      </div>
    </footer>

    <div class="modal fade" id="ModalPersona" tabindex="-1" role="">
        <div class="modal-dialog modal-login modal-lg" role="document">
            <div class="card modal-content shadow-lg p-3 mb-5 bg-white wow animated fadeInDown" style="border-radius: 25px; !important">
                <h5 class="card-header shadow white-text text-center py-3" style="background-color: #fff;border-radius: 25px; !important">
                    <img src="{{ asset('img/logo-parrot.png') }}" class="img-fluid">
                </h5>
                <div class="card-body px-5 mx-3">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ asset('img/parrot.png') }}" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <p class="h4 mb-2 text-center">INICIAR SESION</p>
                            <form id="FormularioLogin" method="POST" action="{{ route('login') }}" class="text-center" style="color: #757575;" novalidate>
                                <div class="md-form md-outline form-sm input-with-pre-icon">
                                    <i class="fa fa-user input-prefix"></i>
                                    <input type="text" id="email" name="email" autocomplete="off" class="form-control" autofocus>
                                    <label for="email">Usuario</label>
                                    <small id="error_email" class="form-text text-muted text-left text-red"></small>
                                </div>
                                <div class="md-form md-outline form-sm input-with-pre-icon">
                                    <i class="fa fa-lock input-prefix"></i>
                                    <input type="password" id="password" name="password" autocomplete="off" class="form-control">
                                    <label for="password">Contraseña</label>
                                    <small id="error_password" class="form-text text-muted text-left text-red"></small>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-sm btn-outline-primary btn-rounded btn-block waves-effect">ACEPTAR</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" id="btn_cerrar_modal" class="btn btn-sm btn-outline-primary btn-rounded btn-block waves-effect">CERRAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    @include('layouts.messages')
    @yield('page-js-script')
    <script>
        $("#btnIngresar").click(function() {
            $('#ModalPersona').modal({backdrop: 'static', keyboard: false});
            $('#ModalPersona').modal('show');
        });

        $("#btn_cerrar_modal").click(function() {
            $('#ModalPersona').modal('hide');
        });

        $("#email, #password").on('focus', function () {
            limpiarErrores($(this).attr('id'));
        });

        $('#FormularioLogin').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                dataType: 'json',
                data: new FormData($(this)[0]),
                processData: false,
                contentType: false,
                success: function (data) 
                {
                    let timerInterval
                    swal({
                        type: 'success',
                        title: 'EXITO',
                        timer: 1600,
                        allowOutsideClick: false,
                        allowEscapeKey:false,
                        showConfirmButton: false,
                        onOpen: () => {
                            timerInterval = setInterval(() => {
                            }, 100)
                        },
                        onClose: () => {
                            location.reload();
                            clearInterval(timerInterval)
                        }
                    });   
                }
            });
        });
    </script>
</html>
