@extends('layouts.app')
@section('title', ' - Laminas') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('lamina.store') }}" class="text-center" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                    <div class="col-2">
                        <div class="md-form md-outline form-sm">
                            <input type="text" id="tbllmnacoda" name="tbllmnacoda" autocomplete="off" class="form-control" autofocus>
                            <label for="tbllmnacoda">CODIGO LAMINA.-</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="md-form md-outline form-sm">
                            <input type="text" id="tbllmnanomb" name="tbllmnanomb" autocomplete="off" class="form-control">
                            <label for="tbllmnanomb">NOMBRE.-</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="md-form md-outline form-sm">
                            <input type="file" id="tbllmnaimgn" name="tbllmnaimgn" autocomplete="off" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="md-form md-outline">
                            <textarea id="tbllmnadesc" name="tbllmnadesc" class="md-textarea form-control" rows="3"></textarea>
                            <label for="tbllmnadesc">DESCRIPCION LAMINA</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <select class="browser-default custom-select" id="tblctgacdgo" name="tblctgacdgo">
                            <option selected>..:: SELECCIONAR CATEGORIA ::..</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->tblctgacdgo }}">{{ $categoria->tblctgadesc }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <select class="browser-default custom-select" id="tbllmnatipo" name="tbllmnatipo">
                            <option selected>..:: SELECCIONAR TIPO ::..</option>
                            <option value="F">FREE</option>
                            <option value="O">ORIGINAL</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-2">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-rounded btn-block waves-effect">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm display nowrap" id="tbllamina" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">CODIGO LAMINA</th>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">FECHA CREACION</th>
                        <th scope="col">TIPO</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col"><b>CODIGO LAMINA</b></th>
                        <th scope="col"><b>CATEGORIA</b></th>
                        <th scope="col"><b>NOMBRE</b></th>
                        <th scope="col"><b>FECHA CREACION</b></th>
                        <th scope="col"><b>TIPO</b></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@section('page-js-script')
<script>
    $("#tbllamina").DataTable({
        lengthMenu: [[10, 20, 30, -1], [10, 20, 30, "Todo"]],
        info: true,
        ordering: true,
        destroy:true,
        searching: true,
        // responsive: true,
        // scrollY: "250px",
        scrollX: true,
        scrollCollapse: true,
        ajax:  '{{ route('lamina.show',1) }}',
        order: [[ 0, "asc" ]],
        columns: [
            { data: 'tbllmnacoda', class:'text-center'},
            { data: 'categoria.tblctgadesc' },
            { data: 'tbllmnanomb' },
            { data: 'tbllmnafech', class:'text-center',orderable: false,searchable: false},
            { data: 'tbllmnatipo' },
        ],
        select: true,
        "language": {
            "sSearch": "Buscar por Codigo y/o Nombre",
            "processing": "Cargando Informacion",
            "lengthMenu": "Mostrando _MENU_ Registros Por Pagina",
            "zeroRecords": "No Se Encontro Resultados",
            "info": "Mostrando Pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No Se Encontro Resultados",
            select: { rows: "" },
            paginate: {
                previous: 'Anterior',
                next:     'Siguiente'
            }
        }
    });
</script>
@stop
@endsection