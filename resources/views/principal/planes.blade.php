@extends('layouts.principal')
@section('title', ' - Contactanos') 
@section('content')
<div style="background-image: linear-gradient(to right, #fc4464,#fc4c3c,#fc4c2c) !important;">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col">
                        <h1 class="text-white font-weight-bold py-4">Planes de Suscripción</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 pr-0 mr-0">
                        <a href="{{ route('index') }}" class="h5 text-white">Inicio &nbsp;>></a>
                    </div>
                    <div class="col-7 pl-0 ml-0">
                        <h5 class="text-white pb-4">Planes de Suscripción</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-5">
    <div class="row text-center">
        <div class="col">
            <h1 class="font-weight-bold pb-3">Precios simplificados. Para que sigas ahorrando.</h1>
        </div>
    </div>
    <div class="row text-center pb-3">
        <div class="col">
            <h5 class="text-muted pb-2">Obtén justo lo que necesitas con nuestras flexibles opciones de pago. Suscríbete para ahorrar a lo grande en cada lámina de la coleccion, elige el plan que mejor se acomode a tus necesidades.</h5>
        </div>
    </div>
</div>

@include('principal.components.plan')

<div class="container pt-4">
    <div class="row">
        <div class="col text-center">
            <h3 class="text-muted font-weight-bold pb-3">Con los dos planes, obtendrá contenido líder en la industria, asistencia y licencias</h3>
        </div>
    </div>
</div>

<div class="py-5" style="background: #f4f4f4">
    <div class="container py-5">
        <div class="row pb-3">
            <div class="col text-center">
                <h2 class="text-muted font-weight-bold pb-3">Lo que nos diferrencia</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-center pb-4">
                        <img src="{{ asset('img/icon1.png') }}" height="100" class="d-inline-block align-top">   
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h5 class="text-muted pb-2">Garantia de devolucion del 100% de su dinero</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-center pb-4">
                        <img src="{{ asset('img/icon2.png') }}" height="100" class="d-inline-block align-top">   
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h5 class="text-muted pb-2">Cada descarga viene con una garantia legal de USD25.000 con una suscripcion válida</h5>
                    </div>
                </div>
            </div><div class="col">
                <div class="row">
                    <div class="col text-center pb-4">
                        <img src="{{ asset('img/icon3.png') }}" height="100" class="d-inline-block align-top">   
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h5 class="text-muted pb-2">Sin limite de impresiones comerciales</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-center pb-4">
                        <img src="{{ asset('img/icon4.png') }}" height="100" class="d-inline-block align-top">   
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h5 class="text-muted pb-2">Más de 90000 imágenes nuevas cada día</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5 mt-5">
    <div class="row pb-3">
        <div class="col text-center">
            <h2 class="text-muted font-weight-bold pb-3">Preguntas Frecuentes</h2>
        </div>
    </div>
</div>

<div class="container">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cuál es la diferencia entre un paquete de descarga y un plan de suscripcion?
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Puedo cancelar la renoación automática de mi plan de suscripción?
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Qué puedo hacer con la Licencia estándar? ¿Cuándo necesitaré la Licencia Extendida?
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cuándo necesito citar a 123RF o al fotógrafo?
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cómo puedo actualizar los datos de facturación que aparecen en mi factura para la próxima compra de un paquete de descarga o de una suscripción?
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cómo sé qué tamaño debo descargar?
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
    </div>
</div>
@section('page-js-script')

@stop
@endsection