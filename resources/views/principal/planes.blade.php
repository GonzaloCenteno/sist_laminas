@extends('layouts.principal')
@section('title', ' - Contactanos') 
@section('content')

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
    <div class="row text-center">
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