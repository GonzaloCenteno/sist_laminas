<form id="FormularioModificarLamina" method="POST" action="{{ route('lamina.update', $lamina->tbllmnacdgo) }}" class="text-center" novalidate>
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <input type="hidden" name="codigo" value="{{ $lamina->tbllmnacdgo }}">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="md-form md-outline form-sm">
                <input type="text" id="tbllmnacoda" name="tbllmnacoda" autocomplete="off" class="form-control" value="{{ $lamina->tbllmnacoda }}" autofocus>
                <label for="tbllmnacoda">CODIGO LAMINA.-</label>
                <small id="error_tbllmnacoda" class="form-text text-muted text-left text-red"></small>
            </div>
        </div>
        <div class="col-9">
            <div class="md-form md-outline form-sm">
                <input type="text" id="tbllmnanomb" name="tbllmnanomb" autocomplete="off" class="form-control" value="{{ $lamina->tbllmnanomb }}">
                <label for="tbllmnanomb">NOMBRE.-</label>
                <small id="error_tbllmnanomb" class="form-text text-muted text-left text-red"></small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <img class="card-img-top img-fluid imglam" src="{{ asset($lamina->tbllmnaimgo) }}" alt="{{ $lamina->tbllmnanomb }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="tbllmnanomb">IMAGEN ORIGINAL.-</label>
                    <div class="md-form md-outline form-sm mt-0">
                        <input type="file" id="tbllmnaimgo" name="tbllmnaimgo" autocomplete="off" class="form-control" accept="image/png,image/gif,image/jpeg">
                        <small id="error_tbllmnaimgo" class="form-text text-muted text-left text-red"></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <img class="card-img-top img-fluid imglam" src="{{ asset($lamina->tbllmnaimgf) }}" alt="{{ $lamina->tbllmnanomb }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="tbllmnanomb">IMAGEN FREE.-</label>
                    <div class="md-form md-outline form-sm mt-0">
                        <input type="file" id="tbllmnaimgf" name="tbllmnaimgf" autocomplete="off" class="form-control" accept="image/png,image/gif,image/jpeg">
                        <small id="error_tbllmnaimgf" class="form-text text-muted text-left text-red"></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <embed src="{{ asset($lamina->tbllmnapdfl) }}" width="100%" height="500" alt="pdf" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="tbllmnanomb">CARATULA POSTERIOR.-</label>
                    <div class="md-form md-outline form-sm mt-0">
                        <input type="file" id="tbllmnapdfl" name="tbllmnapdfl" autocomplete="off" class="form-control" accept="application/pdf">
                        <small id="error_tbllmnapdfl" class="form-text text-muted text-left text-red"></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="md-form md-outline">
                <textarea id="tbllmnadesc" name="tbllmnadesc" class="md-textarea form-control" rows="3">{!! $lamina->tbllmnadesc !!}</textarea>
                <small id="error_tbllmnadesc" class="form-text text-muted text-left text-red"></small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="md-form md-outline">
                <textarea id="tbllmnatags" name="tbllmnatags" class="md-textarea form-control" rows="3">{{ $lamina->tbllmnatags }}</textarea>
                <label for="tbllmnatags">TAGS</label>
                <small id="error_tbllmnatags" class="form-text text-muted text-left text-red"></small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <select style="width: 100%" id="tblctgacdgo" name="tblctgacdgo[]" multiple="multiple">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->tblctgacdgo }}" {{ in_array($categoria->tblctgacdgo, $relaciones) ? 'selected' : '' }}>{{ $categoria->tblctgadesc }}</option>
                @endforeach
            </select>
            <small id="error_tblctgacdgo" class="form-text text-muted text-left text-red"></small>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-6 offset-2">
            <button type="submit" class="btn btn-sm btn-outline-primary btn-rounded btn-block waves-effect">GUARDAR</button>
        </div>
    </div>
</form>

<script>
    jQuery(document).ready(function($){
        CKEDITOR.replace('tbllmnadesc');
        $('#tblctgacdgo').select2({
            placeholder: "..:: SELECCIONAR CATEGORIAS ::.."
        });
    });

    $("#tbllmnacoda, #tbllmnanomb, #tbllmnaimgo, #tbllmnadesc, #tbllmnatags, #tblctgacdgo, #tbllmnatipo").on('focus change keyup', function () {
        limpiarErrores($(this).attr('id'));
    });

    $('#FormularioModificarLamina').submit(function(e){
        e.preventDefault();

        var FormularioRegistro = new FormData($(this)[0]);
        FormularioRegistro.append('tbllmnadesc', CKEDITOR.instances.tbllmnadesc.getData());
        
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: FormularioRegistro,
            processData: false,
            contentType: false,
            success: function (data) 
            {
                $("#tbllmnacoda").val('');
                $("#tbllmnanomb").val('');
                $("#tbllmnaimgo").val('');
                $('#tbllmnadesc').removeClass('input-danger is-invalid');
                CKEDITOR.instances['tbllmnadesc'].setData('');
                $("#tbllmnatags").val('');
                $("#tblctgacdgo").val([]).change();
                $("#tbllmnatipo").val(0);
                $("#registroLamina").removeClass('d-block');
                $("#registroLamina").addClass('d-none');
                $('#tbllamina').DataTable().ajax.reload();
                alertas(4);
            }
        });
    });
</script>