@extends('layouts.app')
@section('title', ' - Mis Laminas') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset($laminas[0]->lamina->tbllmnaimgn) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $laminas[0]->lamina->tbllmnanomb }}</h5>
                    <p class="card-text">{{ $laminas[0]->lamina->tbllmnadesc }}</p>
                    <a href="{{ route('file.edit', $laminas[0]->lamina->tbllmnauuid) }}" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-primary">Descargar</a>
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