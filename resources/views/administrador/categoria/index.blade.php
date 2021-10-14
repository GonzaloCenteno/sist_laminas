@extends('layouts.app')
@section('title', ' - Categorias') 
@section('content')

<div class="container pt-5">
    <div class="row">
        <div id="registroCategoria" class="col d-none">
            <form id="FormularioCrearCategoria" method="POST" action="{{ route('categoria.store') }}" class="text-center" novalidate>
                @csrf
                <div class="row">
                    <div class="col" id="idcategoria"></div>
                </div>
                <div class="md-form md-outline form-sm">
                    <input type="text" id="tblctgadesc" name="tblctgadesc" autocomplete="off" class="form-control" autofocus>
                    <label for="tblctgadesc">DESCRIPCION CATEGORIA.-</label>
                    <small id="error_tblctgadesc" class="form-text text-muted text-left text-red"></small>
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
                    <i id="mostrarCategoria" class="fa fa-plus-circle fa-4x" aria-hidden="true" style="cursor: pointer"></i>
                </div>
            </div>
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
                        <th scope="col">EDITAR</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col"><b>CODIGO CATEGORIA</b></th>
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
        order: [[ 0, "desc" ]],
        columns: [
            { data: 'tblctgacdgo', class:'text-center'},
            { data: 'tblctgadesc' },
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

    $("#mostrarCategoria").click(function(){
        $("#registroCategoria").removeClass('d-none');
        $("#registroCategoria").addClass('d-block');
        $("#idcategoria").children("input").remove();
        $("#tblctgadesc").val('').trigger("change");
    });

    //$("#material").addClass("active");

    $("#tblctgadesc").on('focus', function () {
        limpiarErrores($(this).attr('id'));
    });

    $('#FormularioCrearCategoria').submit(function(e){
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
                $("#tblctgadesc").val('');
                $("#registroCategoria").removeClass('d-block');
                $("#registroCategoria").addClass('d-none');
                $('#tblcategoria').DataTable().ajax.reload();
                alertas(4);
            }
        });
    });

    function traer_categoria(obj)
    {
        $("#registroCategoria").removeClass('d-none');
        $("#registroCategoria").addClass('d-block');
        $("#idcategoria").html('<input type="hidden" id="tblctgacdgo" name="tblctgacdgo">');
        $("#tblctgadesc").val(obj.tblctgadesc).trigger("change");
        $("#tblctgacdgo").val(obj.tblctgacdgo);
        $("#tblctgadesc").focus();
    }
</script>
@stop
@endsection