@extends('layouts.principal')
@section('title', ' - Contactanos') 
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
@section('page-js-script')
<script>
</script>
@stop
@endsection