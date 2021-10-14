<script>
    $(function () {
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend:function()
            {            
                alertas(1);
            },
            error: function (x, status, error) {
                console.log(x, status, error);
                if (x.status == 422) {
                    alertas(3);
                    var data = x.responseJSON.errors;
                    for(let i in data){
                        mostrarErrores(i,data[i][0]);
                    }
                }
                else {
                    swal({
                        type: 'error',
                        title: 'OCURRIO UN PROBLEMA',
                        html: x.responseText,
                        allowOutsideClick: false,
                        allowEscapeKey:false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'ACEPTAR'
                    });
                }
            }
        });
    });

    function limpiarErrores(nombre) {
        $("#error_"+nombre).hide();
        $("#error_"+nombre).text('');
        $("#"+nombre).removeClass('input-danger is-invalid');
    }

    function mostrarErrores(nombre, error) {
        $("#error_"+nombre).show();
        $("#error_"+nombre).text(error);
        $("#"+nombre).addClass('input-danger is-invalid');
    }

    function alertas(tipo, url) {
        if (tipo === 1) {
            swal({
                title: "PROCESANDO INFORMACION",
                allowOutsideClick: false,
                allowEscapeKey:false,
                allowEnterKey:false,
                showConfirmButton: false,
                onOpen: function () {
                    swal.showLoading()
                }
                }).then(
                function () {},
                function (dismiss) {
                    if (dismiss === 'timer') {
                    console.log('I was closed by the timer')
                    }
                }) 
        } else if(tipo === 2) {
            let timerInterval
            swal({
                type: 'success',
                title: 'EXITO',
                timer: 1600,
                allowOutsideClick: false,
                allowEscapeKey:false,
                showConfirmButton: false,
                onOpen: () => {
                    timerInterval = setInterval(() => {
                    }, 100)
                },
                onClose: () => {
                    var ruta = "{{URL::to(':id')}}";
                    ruta = ruta.replace(':id', url);
                    window.location.href = ruta;
                    clearInterval(timerInterval)
                }
            });   
        } else if(tipo === 3) {
            swal({
                type: 'warning',
                title: 'FALTA COMPLETAR DATOS EN EL FORMULARIO',
                timer: 1200,
                allowOutsideClick: false,
                allowEscapeKey:false,
                showConfirmButton: false,
                onOpen: () => {
                    timerInterval = setInterval(() => {
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
            });
        } else if(tipo === 4) {
            let timerInterval
            swal({
                type: 'success',
                title: 'EXITO',
                timer: 1400,
                allowOutsideClick: false,
                allowEscapeKey:false,
                showConfirmButton: false,
                onOpen: () => {
                    timerInterval = setInterval(() => {
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
            });   
        } else {
            swal({
                type: 'error',
                title: 'OCURRIO UN PROBLEMA',
                allowOutsideClick: false,
                allowEscapeKey:false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'ACEPTAR'
            }); 
        }
    }
</script>