@extends('layouts.app')
@section('title', ' - Planes') 
@section('content')

<div class="container">
    <div class="row">
        <div id="registroPlan" class="col d-none">
            <form id="FormularioCrearPlan" method="POST" action="{{ route('plan.store') }}" class="text-center" novalidate>
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="md-form md-outline form-sm">
                            <input type="text" id="tblplannomb" name="tblplannomb" autocomplete="off" class="form-control" autofocus>
                            <label for="tblplannomb">NOMBRE.-</label>
                            <small id="error_tblplannomb" class="form-text text-muted text-left text-red"></small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="md-form md-outline form-sm">
                            <input type="text" id="tblplancost" name="tblplancost" autocomplete="off" class="form-control">
                            <label for="tblplancost">COSTO.-</label>
                            <small id="error_tblplancost" class="form-text text-muted text-left text-red"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="md-form md-outline">
                            <textarea id="tblplandesc" name="tblplandesc" class="md-textarea form-control" rows="3"></textarea>
                            <label for="tblplandesc">DESCRIPCION.-</label>
                            <small id="error_tblplandesc" class="form-text text-muted text-left text-red"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-2">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-rounded btn-block waves-effect">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2 text-center">
                    <i id="mostrarPlan" class="fa fa-plus-circle fa-4x" aria-hidden="true" style="cursor: pointer"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm display nowrap" id="tblplan" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">CODIGO PLAN</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">COSTO</th>
                        <th scope="col">FECHA CREACION</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col"><b>CODIGO PLAN</b></th>
                        <th scope="col"><b>NOMBRE</b></th>
                        <th scope="col"><b>COSTO</b></th>
                        <th scope="col"><b>FECHA CREACION</b></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@section('page-js-script')
<script>
    $("#tblplan").DataTable({
        lengthMenu: [[10, 20, 30, -1], [10, 20, 30, "Todo"]],
        info: true,
        ordering: true,
        destroy:true,
        searching: true,
        // responsive: true,
        // scrollY: "250px",
        scrollX: true,
        scrollCollapse: true,
        ajax:  '{{ route('plan.show',1) }}',
        order: [[ 0, "asc" ]],
        columns: [
            { data: 'tblplancdgo', class:'text-center'},
            { data: 'tblplannomb' },
            { data: 'tblplancost', class:'text-center' },
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

    $("#mostrarPlan").click(function(){
        $("#registroPlan").removeClass('d-none');
        $("#registroPlan").addClass('d-block');
    });

    //$("#material").addClass("active");

    $("#tblplannomb, #tblplandesc, #tblplancost").on('focus', function () {
        limpiarErrores($(this).attr('id'));
    });

    $('#FormularioCrearPlan').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            dataType: 'json',
            data: new FormData($(this)[0]),
            processData: false,
            contentType: false,
            success: function (data) 
            {
                $("#tblplannomb").val('');
                $("#tblplandesc").val('');
                $("#tblplancost").val('');
                $("#registroPlan").removeClass('d-block');
                $("#registroPlan").addClass('d-none');
                $('#tblplan').DataTable().ajax.reload();
                alertas(4);
            }
        });
    });
</script>
@stop
@endsection