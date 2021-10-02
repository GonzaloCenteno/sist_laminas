@extends('layouts.principal')
@section('title', ' - Contactanos') 
@section('content')
<div style="background-image: linear-gradient(to right, #fc4464,#fc4c3c,#fc4c2c) !important;">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col">
                        <h1 class="text-white font-weight-bold py-4">Contáctanos</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 pr-0 mr-0">
                        <a href="{{ route('index') }}" class="h5 text-white">Inicio &nbsp;>></a>
                    </div>
                    <div class="col-7 pl-0 ml-0">
                        <h5 class="text-white pb-4">Contáctanos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-5">
    <div class="row text-center">
        <div class="col">
            <h1 class="font-weight-bold pb-3">Ponerse en Contácto</h1>
        </div>
    </div>
    <div class="row text-center pb-3">
        <div class="col">
            <h5 class="text-muted pb-2">Déjenos sus datos para que un personal lo contacte.</h5>
        </div>
    </div>
    <div class="row px-5 mx-5">
        <div class="col">
            <form class="text-center" action="#!">
                <div class="row mb-4">
                    <div class="col-8 offset-2">
                        <input type="text" id="defaultRegisterFormEmail" class="form-control form-control-lg" placeholder="Nombre">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-8 offset-2">
                        <input type="email" id="defaultRegisterFormEmail" class="form-control form-control-lg mb-4" placeholder="Email">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-8 offset-2">
                        <input type="text" id="defaultRegisterFormEmail" class="form-control form-control-lg mb-4" placeholder="Asunto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="MENSAJE"></textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6 offset-2">
                        <button class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.0755951638516!2d-77.17133955753768!3d-11.759725277856884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91067f94ae153e23%3A0xe93b7a99371abf5f!2sMiramar%2C%20Anc%C3%B3n%2015123!5e0!3m2!1ses-419!2spe!4v1633116900994!5m2!1ses-419!2spe" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-4 d-flex justify-content-center">
            <div class="card shadow-lg text-center" style="width: 18rem;border-radius: 30px; !important">
                <div class="card-body text-center">
                    <div class="row pb-4">
                        <div class="col text-center">
                            <i class="fa fa-envelope fa-4x text-danger" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h4 class="font-weight-bold pb-4">Email</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center px-0">
                            <h5 class="text-muted pb-2">ventas@laminaseducativas.com</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="text-muted pb-2">info@laminaseducativas.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card shadow-lg text-center" style="width: 18rem;border-radius: 30px; !important">
                <div class="card-body text-center">
                    <div class="row pb-4">
                        <div class="col text-center">
                            <i class="fa fa-volume-control-phone fa-4x text-danger" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h4 class="font-weight-bold pb-4">Teléfono</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="text-muted pb-2">+51 1 948 600546</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card shadow-lg text-center" style="width: 18rem;border-radius: 30px; !important">
                <div class="card-body text-center">
                    <div class="row pb-4">
                        <div class="col text-center">
                            <i class="fa fa-map-marker text-danger fa-4x" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h4 class="font-weight-bold pb-4">Dirección</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="text-muted pb-2">Calle Malecón Miramar 834</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="text-muted pb-2">Lima - Perú</h5>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="my-5" style="background-image: linear-gradient(to right, #fc4464,#fc4c3c,#fc4c2c) !important;">
    <div class="container">
        <div class="row py-5">
            <div class="col-9 pt-3">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-white pb-4">Únete Noticias láminas</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-white pb-4">Recibe las actualizaciones de Láminas Escolares. Másr 75,000 diseñadores y desarrolladores de contenido para tí.</h5>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex align-items-center">
                <button class="btn btn-lg btn-default-danger btn-rounded text-white" style="border: 2px solid #fff;">Unete Ahora</button>
            </div>
        </div>
    </div>
</div>
@section('page-js-script')
<script>
</script>
@stop
@endsection