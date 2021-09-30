@extends('layouts.principal')
@section('title', ' - Categorias') 
@section('content')

<div class="container-fluid py-5" style="background: #840e45">
    <div class="row px-5 mx-5">
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
                        <input type="text" class="form-control py-4" style="border-radius: 25px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
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
<div class="container py-5">
    <div class="row px-5 mx-5">
        @foreach($planes as $plan)
        <div class="col-4">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $plan->tblplanprdo }} Meses</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Suscripcion</h6>
                    <p class="card-text">{{ $plan->tblplancost }}</p>
                    <p class="card-text">{{ $plan->tblplannomb }}</p>
                    <p class="card-text">{{ $plan->tblplandesc }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container py-5">
    <div class="row px-5 mx-5">
        <div class="col-3">
            <div class="row">

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
@section('page-js-script')

@stop
@endsection