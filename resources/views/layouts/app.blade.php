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
	</style>
</head>
<body>
    @guest
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6 offset-md-1 offset-lg-3 pt-3 mt-5">
            @yield('content-login')
        </div>
    @else
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-parrot.png') }}" class="img-fluid"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>


            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            {{ Auth::user()->name }}      

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categoria.index') }}" class="nav-link" href="#">Categorias</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('lamina.index') }}" class="nav-link" href="#">Laminas</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('usuario.index') }}" class="nav-link" href="#">Usuario</a>
                </li>
            </ul>
            <!-- Links -->
        </nav>
        <!--/.Navbar-->
    @endguest 

    <main class="py-4">
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
    @yield('page-js-script')
</html>
