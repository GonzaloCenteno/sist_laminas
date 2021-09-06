@extends('layouts.app')
@section('title', ' - Mis Laminas') 
@section('content')

<div class="container-fluid">
    @if($laminas->count() != 0)
    <div class="row">
        <div class="col-7">
            <div class="md-form md-outline form-sm">
                <input type="text" id="tblctgadesc" name="tblctgadesc" autocomplete="off" class="form-control" autofocus>
                <label for="tblctgadesc">BUSCAR LAMINA.-</label>
            </div>
        </div>
        <div class="col-5 pt-4">
            <select class="browser-default custom-select" id="tblctgacdgo" name="tblctgacdgo">
                <option value="0" selected>..:: SELECCIONAR CATEGORIA ::..</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->tblctgacdgo }}">{{ $categoria->tblctgadesc }}</option>
                @endforeach
            </select>
            <small id="error_tblctgacdgo" class="form-text text-muted text-left text-red"></small>
        </div>
    </div>
    @endif
    <div class="row" id="dataLamina">
        @include('usuario.file.pagination')
    </div>
</div>

@section('page-js-script')
<script>
    $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault(); 
            var page = $(this).attr('href').split('page=')[1];
            
            cambiar_pagina(page);
        });

        function cambiar_pagina(page)
        {
            $.ajax({
                url: '{{ route('file.index') }}',
                data: {
                    page : page
                },
                success:function(data)
                {
                    $('#dataLamina').html(data);
                    swal.close();
                }
            });
        }
    });
</script>
@stop
@endsection