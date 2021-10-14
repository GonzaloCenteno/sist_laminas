@extends('layouts.app')
@section('title', ' - Ver Mas') 
@section('content')

<div class="container">
    <div class="row pt-5">
        <div class="col text-center">
            <h2>{{ $lamina->tbllmnacoda }} - {{ $lamina->tbllmnanomb }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h2>{{ $lamina->categoria->tblctgadesc }}</h2>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-7 d-flex align-items-center">
            <img src="{{ asset($lamina->tbllmnaimgn) }}" style="width:100%">
        </div>
        <div class="col-5">
            <div class="row pt-2">
                <div class="col">
                    <h3>DESCRIPCION: </h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="text-justify">{{ $lamina->tbllmnadesc }}</h4>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col">
                    <h3>TAGS: </h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>{{ $lamina->tbllmnatags }}</h4>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <a type="button" href="{{ route('file.index') }}" class="btn btn-md btn-outline-danger btn-rounded waves-effect btn-block">REGRESAR</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection