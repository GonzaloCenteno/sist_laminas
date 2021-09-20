@extends('layouts.app')
@section('title', ' - Usuarios') 
@section('content')

<div class="container">
    <div class="row pt-5">
        <div class="col-12">
            <table class="table table-sm display nowrap" id="tblusuario" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">PERSONA</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">FECHA REGISTRO</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col"><b>CODIGO</b></th>
                        <th scope="col"><b>PERSONA</b></th>
                        <th scope="col"><b>CORREO</b></th>
                        <th scope="col"><b>FECHA REGISTRO</b></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@section('page-js-script')
<script>
    $("#tblusuario").DataTable({
        lengthMenu: [[10, 20, 30, -1], [10, 20, 30, "Todo"]],
        info: true,
        ordering: true,
        destroy:true,
        searching: true,
        scrollX: true,
        scrollCollapse: true,
        ajax:  '{{ route('usuario.show',1) }}',
        order: [[ 0, "asc" ]],
        columns: [
            { data: 'tblusrocdgo', class:'text-center'},
            { data: 'tblusronomb' },
            { data: 'email'},
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