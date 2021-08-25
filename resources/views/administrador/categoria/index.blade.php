@extends('layouts.app')
@section('title', ' - Categorias') 
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('categoria.store') }}" class="text-center" novalidate>
                @csrf
                <div class="md-form md-outline form-sm">
                    <input type="text" id="tblctgadesc" name="tblctgadesc" autocomplete="off" class="form-control" autofocus>
                    <label for="tblctgadesc">DESCRIPCION CATEGORIA.-</label>
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
            <table class="table table-sm display nowrap" id="tblcategoria" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">CODIGO CATEGORIA</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">FECHA CREACION</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col"><b>CODIGO CATEGORIA</b></th>
                        <th scope="col"><b>DESCRIPCION</b></th>
                        <th scope="col"><b>FECHA CREACION</b></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@section('page-js-script')
<script>
    $("#tblcategoria").DataTable({
        lengthMenu: [[10, 20, 30, -1], [10, 20, 30, "Todo"]],
        info: true,
        ordering: true,
        destroy:true,
        searching: true,
        // responsive: true,
        // scrollY: "250px",
        scrollX: true,
        scrollCollapse: true,
        ajax:  '{{ route('categoria.show',1) }}',
        order: [[ 0, "asc" ]],
        columns: [
            { data: 'tblctgacdgo', class:'text-center'},
            { data: 'tblctgadesc' },
            { data: 'created_at', class:'text-center',orderable: false,searchable: false}
        ],
        select: true,
        "language": {
            "sSearch": "Buscar por Codigo y/o Descripcion",
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