@extends('layouts.app')
@section('title', ' - Laminas') 
@section('content')

<div class="container pt-5">
    <div class="row">
        <div id="registroLamina" class="col d-none"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2 text-center">
                    <i id="mostrarLamina" class="fa fa-plus-circle fa-4x" aria-hidden="true" style="cursor: pointer"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-0 px-0">
            <table class="table table-sm display nowrap" id="tbllamina" style="width:100%">
                <thead>
                    <tr>
                        <th style="width:10%">CODIGO LAMINA</th>
                        <th style="width:40%">CATEGORIA</th>
                        <th style="width:20%">NOMBRE</th>
                        <th style="width:10%">FECHA CREACION</th>
                        <th style="width:20%">ACCIONES</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th><b>CODIGO LAMINA</b></th>
                        <th><b>CATEGORIA</b></th>
                        <th><b>NOMBRE</b></th>
                        <th><b>FECHA CREACION</b></th>
                        <th><b>ACCIONES</b></th>
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
        order: [[ 0, "desc" ]],
        columns: [
            { data: 'tbllmnacoda', class:'text-center'},
            { data: 'categorias', class:'text-left' },
            { data: 'tbllmnanomb' },
            { data: 'tbllmnafech', class:'text-center',orderable: false,searchable: false},
            { data: 'action', class:'text-center',orderable: false,searchable: false},
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

    $("#mostrarLamina").click(function(){
        let url = "{{ route('lamina.create') }}";
        $('#registroLamina').load(url,function(){
            $("#registroLamina").removeClass('d-none');
            $("#registroLamina").addClass('d-block');
            swal.close();
        });
    });

    //$("#material").addClass("active");

    function cambiarEstado(cdgo,estado)
    {
        $.ajax({
            type: 'GET',
            url: "{{ route('lamina.edit', '1') }}",
            data:{
                estado: estado,
                cdgo: cdgo
            },
            success: function (data) 
            {
                $('#tbllamina').DataTable().ajax.reload();
                alertas(4);
            }
        });
    }

    function traer_lamina(tbllmnacdgo)
    {
        let url = "{{ route('lamina.edit', '2') }}?tbllmnacdgo="+tbllmnacdgo;
        $('#registroLamina').load(url,function(){
            $("#registroLamina").removeClass('d-none');
            $("#registroLamina").addClass('d-block');
            $("#tbllmnacoda").trigger("change");
            $("#tbllmnatags").trigger("change");
            $("#tbllmnanomb").trigger("change");
            alertas(4);
        });
    }

    function eliminar_lamina(tbllmnacdgo,codigo,nombre)
    {
        swal({
            title: '¿QUIERES ELIMINAR ESTA LAMINA?',
            html: "<b>"+codigo+" - "+nombre+"</b>",
            type: 'warning',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ACEPTAR',
            cancelButtonText: 'CANCELAR',
            confirmButtonClass: 'btn btn-outline-primary btn-sm',
            cancelButtonClass: 'btn btn-outline-danger btn-sm',
            showCancelButton: true,
            buttonsStyling: false,
            allowOutsideClick: false,
            allowEscapeKey:false,
            allowEnterKey:false,
            reverseButtons: true
        }).then(function(result) {
            if(result)
            {
                let url = "{{ route('lamina.destroy', 'id') }}";
                url = url.replace('id', tbllmnacdgo);

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    success: function(data) 
                    {
                        $("#registroLamina").removeClass('d-block');
                        $("#registroLamina").addClass('d-none');
                        $('#tbllamina').DataTable().ajax.reload();
                        alertas(4);
                    }
                });
            }
        });
    }
</script>
@stop
@endsection