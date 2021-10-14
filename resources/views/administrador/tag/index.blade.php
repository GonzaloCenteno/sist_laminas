@extends('layouts.app')
@section('title', ' - Tags') 
@section('content')

<div class="container pt-5">
    <div class="row">
        <div id="registroTag" class="col d-none">
            <form id="FormularioCrearTag" method="POST" action="{{ route('tag.store') }}" class="text-center" novalidate>
                @csrf
                <div class="row">
                    <div class="col" id="idtag"></div>
                </div>
                <div class="md-form md-outline form-sm">
                    <input type="text" id="tbltagsdesc" name="tbltagsdesc" autocomplete="off" class="form-control" autofocus>
                    <label for="tbltagsdesc">DESCRIPCION TAG.-</label>
                    <small id="error_tbltagsdesc" class="form-text text-muted text-left text-red"></small>
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
                    <i id="mostrarTag" class="fa fa-plus-circle fa-4x" aria-hidden="true" style="cursor: pointer"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm display nowrap" id="tbltag" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">CODIGO TAG</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">FECHA CREACION</th>
                        <th scope="col">EDITAR</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col"><b>CODIGO TAG</b></th>
                        <th scope="col"><b>DESCRIPCION</b></th>
                        <th scope="col"><b>FECHA CREACION</b></th>
                        <th scope="col"><b>EDITAR</b></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@section('page-js-script')
<script>
    $("#tbltag").DataTable({
        lengthMenu: [[10, 20, 30, -1], [10, 20, 30, "Todo"]],
        info: true,
        ordering: true,
        destroy:true,
        searching: true,
        // responsive: true,
        // scrollY: "250px",
        scrollX: true,
        scrollCollapse: true,
        ajax:  '{{ route('tag.show',1) }}',
        order: [[ 0, "asc" ]],
        columns: [
            { data: 'tbltagscdgo', class:'text-center'},
            { data: 'tbltagsdesc' },
            { data: 'created_at', class:'text-center',orderable: false,searchable: false},
            { data: 'action', class:'text-center',orderable: false,searchable: false},
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

    $("#mostrarTag").click(function(){
        $("#registroTag").removeClass('d-none');
        $("#registroTag").addClass('d-block');
        $("#idtag").children("input").remove();
        $("#tbltagsdesc").val('').trigger("change");
        $("#tbltagsdesc").focus();
    });

    //$("#material").addClass("active");

    $("#tbltagsdesc").on('focus', function () {
        limpiarErrores($(this).attr('id'));
    });

    $('#FormularioCrearTag').submit(function(e){
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
                $("#tbltagsdesc").val('');
                $("#registroTag").removeClass('d-block');
                $("#registroTag").addClass('d-none');
                $('#tbltag').DataTable().ajax.reload();
                alertas(4);
            }
        });
    });

    function traer_tag(obj)
    {
        $("#registroTag").removeClass('d-none');
        $("#registroTag").addClass('d-block');
        $("#idtag").html('<input type="hidden" id="tbltagscdgo" name="tbltagscdgo">');
        $("#tbltagsdesc").val(obj.tbltagsdesc).trigger("change");
        $("#tbltagscdgo").val(obj.tbltagscdgo);
        $("#tbltagsdesc").focus();
    }
</script>
@stop
@endsection