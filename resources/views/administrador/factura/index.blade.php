@extends('layouts.app')
@section('title', ' - Facturas') 
@section('content')

<div class="container">
    <div class="row pt-5">
        <div class="col-12">
            <table class="table table-sm display nowrap" id="tblfactura" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">PERSONA</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">PLAN</th>
                        <th scope="col">COSTO</th>
                        <th scope="col">FECHA REGISTRO</th>
                        <th scope="col">FECHA VENCIMIENTO</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col"><b>CODIGO</b></th>
                        <th scope="col"><b>PERSONA</b></th>
                        <th scope="col"><b>CORREO</b></th>
                        <th scope="col"><b>PLAN</b></th>
                        <th scope="col"><b>COSTO</b></th>
                        <th scope="col"><b>FECHA REGISTRO</b></th>
                        <th scope="col"><b>FECHA VENCIMIENTO</b></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@section('page-js-script')
<script>
    $("#tblfactura").DataTable({
        lengthMenu: [[10, 20, 30, -1], [10, 20, 30, "Todo"]],
        info: true,
        ordering: true,
        destroy:true,
        searching: true,
        scrollX: true,
        scrollCollapse: true,
        ajax:  '{{ route('factura.show',1) }}',
        order: [[ 0, "asc" ]],
        columns: [
            { data: 'usuario.tblusrocdgo', class:'text-center'},
            { data: 'usuario.tblusronomb' },
            { data: 'usuario.email'},
            { data: 'plan.tblplannomb', class:'text-center'},
            { data: 'plan.tblplancost', class:'text-center'},
            { data: 'tblusplfech', class:'text-center'},
            { data: 'fechvencimiento', class:'text-center',orderable: false,searchable: false},
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