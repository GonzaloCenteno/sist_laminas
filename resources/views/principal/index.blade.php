@extends('layouts.principal')
@section('title', '') 
@section('content')

<div class="py-5" style="background: #840e45">
    <div class="container">
        <div class="row">
            <div class="col-3 pt-5">
                <img src="{{ asset('img/parrot.png') }}" height="300" class="d-inline-block align-top">
            </div>
            <div class="col-9 pt-5">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center display-4 text-white font-weight-bold">Las mejores imágenes para tus tareas escolares.</h2>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <div class="input-group input-group-lg">
                            <input type="text" id="bsq_lamina" name="bsq_lamina" class="form-control py-4" style="border-radius: 25px;" aria-label="Sizing example input" autocomplete="off" aria-describedby="bsq_lamina">
                            <div class="input-group-prepend">
                                <button class="btn btn-danger input-group-prepend mb-5" style="border-radius: 25px;">
                                    <i class="fa fa-search fa-2x text-white" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
</div>

<div class="container pt-5">
    <div class="row">
        <div class="col">
            <h4 class="text-muted font-weight-bold">Láminas Recomendadas del Mes</h4>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row" id="dataLamina">
        @include('usuario.file.pagination')
    </div>        
</div>

<div class="container py-5">
    <div class="row">
        <div class="col text-center">
            <button style="background-image: linear-gradient(to right, #fc4464,#fc4c3c,#fc4c2c) !important;" class="btn btn-lg btn-default-danger btn-rounded text-white" style="border: 2px solid #fff;"><i class="fa fa-arrow-down" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Mas Productos</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="font-weight-bold py-4">Búsquedas Populares:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            @foreach($tags as $tag)
                <button class="btn btn-default-danger shadow btn-rounded" style="border: 2px solid #840e45;">{{ $tag->tbltagsdesc }}</button>
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid py-5 my-5" style="background-size: cover !important;background-image: url({{ asset('img/FondoInicio_1.jpg') }})">
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <div class="card shadow-lg p-3 mb-5 bg-white" style="border-radius: 25px; !important">
                <div class="card-body px-5 mx-3">
                    <div class="row">
                        <div class="col">
                            <h3 class="card-tittle font-weight-bold">Registrese para descargar archivos semanales gratis</h3>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <button class="btn btn-danger btn-block btn-rounded py-2">
                                <i class="fa fa-google fa-2x" aria-hidden="true"></i> &nbsp;Registrarse usando <font class="font-weight-bold">Google</font>
                            </button>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <button class="btn btn-info btn-block btn-rounded py-2">
                                <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> &nbsp;Registrarse usando <font class="font-weight-bold">Facebook</font>
                            </button>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <button class="btn btn-block btn-rounded py-2">
                                <i class="fa fa-envelope fa-2x" aria-hidden="true"></i> &nbsp;Registrarse usando <font class="font-weight-bold">E-mail</font>
                            </button>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col text-center">
                            <h6>Al hacer click en "Registrar Cuenta" o registrarse a través de Facebook o Google esta aceptando las condiciones del <font class="text-info">Contrato de Usuario</font>.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('principal.components.plan')

<!-- <div class="container py-5">
    <div class="row px-5 mx-5">
        <div class="col-3">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-danger input-group-prepend mb-5" style="border-radius: 25px;">
                        <i class="fa fa-picture-o text-white fa-4x" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h1 class="font-weight-bold display-4">12400</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h5 class="text-muted">Imágenes</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-danger input-group-prepend mb-5" style="border-radius: 25px;">
                        <i class="fa fa-newspaper-o text-white fa-4x" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h1 class="font-weight-bold display-4">1200</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h5 class="text-muted">Láminas Escolares</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-danger input-group-prepend mb-5" style="border-radius: 25px;">
                        <i class="fa fa-users text-white fa-4x" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h1 class="font-weight-bold display-4">1250</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h5 class="text-muted">Suscriptores</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-danger input-group-prepend mb-5" style="border-radius: 25px;">
                        <i class="fa fa-cloud-download text-white fa-4x" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h1 class="font-weight-bold display-4">6789</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h5 class="text-muted">Descargas</h5>
                </div>
            </div>
        </div>
    </div>
</div> -->
@section('page-js-script')
<script>
</script>
@stop
@endsection