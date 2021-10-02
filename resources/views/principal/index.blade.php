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
<div class="container-fluid py-5">
    <div class="row" id="dataLamina">
        @include('usuario.file.pagination')
    </div>        
</div>

@include('principal.components.plan')

<div class="container py-5">
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
</div>
<div style="background-image: linear-gradient(to right, #fc4464,#fc4c3c,#fc4c2c) !important;">
    <div class="container">
        <div class="row py-5">
            <div class="col-9 pt-3">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-white pb-4">Join Us Today</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-white pb-4">Over 75,000 designers and developers trust the DigiMarket.</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center">
                <button class="btn btn-lg btn-default-danger btn-rounded text-white" style="border: 2px solid #fff;">Join Us Today</button>
            </div>
        </div>
    </div>
</div>
@section('page-js-script')
<script>
</script>
@stop
@endsection