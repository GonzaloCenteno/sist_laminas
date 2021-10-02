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
<div class="container pt-5">
    <div class="row text-center">
        <div class="col">
            <h3 class="text-muted font-weight-bold pb-3">Con los dos planes, obtendrá contenido líder en la industria, asistencia y licencias</h3>
        </div>
    </div>
    <div class="row text-center py-4">
        <div class="col">
            <i class="text-muted fa fa-star-o fa-4x" aria-hidden="true"></i>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h2 class="text-muted text-info font-weight-bold pb-3">Temas más actualizados</h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h5 class="text-muted pb-2">Más de 3000 imágenes de los temas de actualidad para el desarrollo del aprendizaje escolar.</h5>
        </div>
    </div>
    <div class="row text-center py-4">
        <div class="col">
            <i class="text-muted fa fa-thumbs-o-up fa-4x" aria-hidden="true"></i>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h2 class="text-muted text-info font-weight-bold pb-3">Tranquilidad</h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h5 class="text-muted pb-2">Lugar seguro donde prodrás encontrar la información para tus tares es un solo lugar.</h5>
        </div>
    </div>
    <div class="row text-center py-4">
        <div class="col">
            <i class="text-muted fa fa-cogs fa-4x" aria-hidden="true"></i>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h2 class="text-muted text-info font-weight-bold pb-3">Asistencia permanente</h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h5 class="text-muted pb-2">Servicio al cliente con asistencia durante las 24 horas del día, los 7 días de la semana.</h5>
        </div>
    </div>
    <div class="row text-center pt-5">
        <div class="col">
            <h1 class="text-muted font-weight-bold pb-3">Preguntas más frecuentes</h1>
        </div>
    </div>
    <div class="row text-center" style="background: black;">
        <div class="col">
            <h1 class="text-white font-weight-bold py-4">¿Necesitas ayuda? Llama al 948600546.</h1>
        </div>
    </div>
</div>
@section('page-js-script')
<script>
</script>
@stop
@endsection