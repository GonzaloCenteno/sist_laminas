@extends('layouts.principal')
@section('title', ' - Contactanos') 
@section('content')

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

<div class="container">
    <div class="row">
        <div class="col embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.0755951638516!2d-77.17133955753768!3d-11.759725277856884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91067f94ae153e23%3A0xe93b7a99371abf5f!2sMiramar%2C%20Anc%C3%B3n%2015123!5e0!3m2!1ses-419!2spe!4v1633116900994!5m2!1ses-419!2spe" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col text-center">
                    <h4 class="font-weight-bold pb-4">Email</h4>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-muted pb-2">ventas@laminaseducativas.com</h5>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h5 class="text-muted pb-2">info@laminaseducativas.com</h5>
                </div>
            </div>
        </div>
        <div class="col-4">
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
        <div class="col-4">
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
@section('page-js-script')
<script>
</script>
@stop
@endsection