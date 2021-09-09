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
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-confirm.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cropper.css') }}" rel="stylesheet" />
    <style>
		.btn-rounded {
			border-radius: 25px;
		}
		body {
			background-color: rgba(245,245,220,0.6) !important;
		}
		input:disabled,
		input[disabled]{
			border: 1px solid #999999 !important;
			background-color: #cccccc !important;
			color: #666666 !important;
		}
        .dataTables_scrollFoot {
            border-top: 1px solid black !important;
        }
        .dataTables_scrollHead {
            border-bottom: 1px solid black !important;
        }
        td {
            padding-top: 1px !important;
            padding-bottom: 1px !important;
            margin-top:1px !important;
            margin-bottom:1px !important; 
        }
        .page-item.active .page-link {
            background-color: lightgrey !important;
            border: 1px solid black !important;
        }
        .page-link {
            color: black !important; 
        }
        .table tr {
            cursor: pointer;
        }
        body table.dataTable tbody>tr:hover td {
            background-color: #1c4c9c !important;
            color: #fff !important;
        }
        .text-red {
            color: red !important;
        }
        .input-danger {
            border: 1px solid red !important;
        }
	</style>
</head>
<body @guest style="background-size: cover !important;background-image:url({{ asset('img/FondoInicio.jpg') }}); opacity: 0.85;" @endguest >
    @guest
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6 offset-md-1 offset-lg-3 pt-3 mt-5">
            @yield('content-login')
        </div>
    @else
        <nav class="navbar navbar-expand-lg navbar-dark indigo fixed-top">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-parrot.png') }}" height="60" class="d-inline-block align-top"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    @if(Auth::user()->tblusrotipo == 'ADM' || Auth::user()->tblusrotipo == 'SPA')
                        <li class="nav-item">
                            <a href="{{ route('plan.index') }}" class="nav-link" href="#">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categoria.index') }}" class="nav-link" href="#">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('lamina.index') }}" class="nav-link" href="#">Laminas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('usuario.index') }}" class="nav-link" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('usuario.index') }}" class="nav-link" href="#">Facturas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('file.index') }}" class="nav-link" href="#">Mis Laminas</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('file.index') }}" class="nav-link" href="#">Mis Laminas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('file.index') }}" class="nav-link" href="#">Mis Favoritos</a>
                        </li>
                    @endif
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    @if(Auth::user()->tblusrotipo == 'USR')
                        @php 
                            $plan = \App\Models\Tbluspl::with('plan')->where([['tblusrocdgo',Auth::user()->tblusrocdgo],['tblusplflag','A']])->first(); 
                            $fvencimiento = \Carbon\Carbon::parse($plan->tblusplfech)->addMonth($plan->plan->tblplanprdo)->format('d-m-Y');
                        @endphp
                        <li class="nav-item text-center">
                            <span class="nav-link my-0 py-0">Tu Membresia Vence: {{ $fvencimiento }}</span>
                            <span class="nav-link my-0 py-0">Plan: {{ $plan->plan->tblplannomb }}</span>
                        </li>
                        <li class="nav-item text-white ">
                            <span class="nav-link my-0 py-0">|</span>
                            <span class="nav-link my-0 py-0">|</span>
                        </li>
                    @endif
                    <li class="nav-item">
                        <span class="nav-link">Bienvenido: {{ Auth::user()->tblusronomb }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-rounded btn-secondary waves-effect nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">CERRAR SESION</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- Links -->
        </nav>
        <!--/.Navbar-->
    @endguest 

    <main class="py-5 my-5">
        @yield('content')
    </main>
</body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    <script src="{{ asset('js/block_ui.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/jquery.toast.js') }}"></script>
    <script src="{{ asset('js/jquery-confirm.js') }}"></script> 
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/cropper.js') }}"></script> 
    
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                beforeSend:function()
                {            
                    alertas(1);
                },
                error: function (x, status, error) {
                    if (x.status == 422) {
                        alertas(3);
                        var data = x.responseJSON.errors;
                        for(let i in data){
                            mostrarErrores(i,data[i][0]);
                        }
                    }
                    else {
                        swal({
                            type: 'error',
                            title: 'OCURRIO UN PROBLEMA',
                            html: x.responseText,
                            allowOutsideClick: false,
                            allowEscapeKey:false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'ACEPTAR'
                        });
                    }
                }
            });
        });

        function limpiarErrores(nombre) {
            $("#error_"+nombre).hide();
            $("#error_"+nombre).text('');
            $("#"+nombre).removeClass('input-danger is-invalid');
        }

        function mostrarErrores(nombre, error) {
            $("#error_"+nombre).show();
            $("#error_"+nombre).text(error);
            $("#"+nombre).addClass('input-danger is-invalid');
        }

        function alertas(tipo, url) {
            if (tipo === 1) {
                swal({
                    title: "PROCESANDO INFORMACION",
                    allowOutsideClick: false,
                    allowEscapeKey:false,
                    allowEnterKey:false,
                    showConfirmButton: false,
                    onOpen: function () {
                      swal.showLoading()
                    }
                  }).then(
                    function () {},
                    function (dismiss) {
                      if (dismiss === 'timer') {
                        console.log('I was closed by the timer')
                      }
                    }) 
            } else if(tipo === 2) {
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
                        var ruta = "{{URL::to(':id')}}";
                        ruta = ruta.replace(':id', url);
                        window.location.href = ruta;
                        clearInterval(timerInterval)
                    }
                });   
            } else if(tipo === 3) {
                swal({
                    type: 'warning',
                    title: 'FALTA COMPLETAR DATOS EN EL FORMULARIO',
                    timer: 1200,
                    allowOutsideClick: false,
                    allowEscapeKey:false,
                    showConfirmButton: false,
                    onOpen: () => {
                        timerInterval = setInterval(() => {
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                });
            } else if(tipo === 4) {
                swal({
                    type: 'success',
                    title: 'EXITO',
                    timer: 1400,
                    allowOutsideClick: false,
                    allowEscapeKey:false,
                    showConfirmButton: false,
                    onOpen: () => {
                        timerInterval = setInterval(() => {
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                });   
            } else {
                swal({
                    type: 'error',
                    title: 'OCURRIO UN PROBLEMA',
                    allowOutsideClick: false,
                    allowEscapeKey:false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'ACEPTAR'
                }); 
            }
        }
    </script>

    @yield('page-js-script')
</html>
