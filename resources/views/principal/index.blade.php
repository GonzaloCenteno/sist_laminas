@extends('layouts.principal')
@section('title', '') 
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
<div class="container-fluid py-5">
    <div class="row" id="dataLamina">
        @include('usuario.file.pagination')
    </div>        
</div>
<div class="container py-5">
    <div class="row px-5 mx-5">
        @foreach($planes as $plan)
        <div class="col-4">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body text-center">
                    <h2 class="card-tittle font-weight-bold">{{ $plan->tblplanprdo }} Meses</h2>
                    <h6 class="card-subtitle mb-2 text-muted">Suscripcion</h6>
                    <p class="card-title pt-3 pb-5"><span class="font-weight-bold h1">s/{{ $plan->tblplancost }}</span> <span>/{{ $plan->tblplanprdo }} meses</span></p>
                    <p class="font-weight-bold h3 pb-3">{{ $plan->tblplannomb }}</p>
                    <p class="card-text">{{ $plan->tblplandesc }}</p>
                    <p class="card-text">{{ $plan->tblplanprdo }} meses</p>
                    <p class="card-text">24/7 Soporte</p>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-rounded btn-outline-danger waves-effect nav-link" href="{{ url('login') }}">
                                <span>SUSCRIBIRSE</span>
                            </a>
                        </div>
                    </div>
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
<div class="container py-5">
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
                    face
                </div>
                <div class="col-3">
                    twi
                </div>
                <div class="col-3">
                    pint
                </div>
                <div class="col-3">
                    ins
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
@section('page-js-script')
<script>
</script>
@stop
@endsection