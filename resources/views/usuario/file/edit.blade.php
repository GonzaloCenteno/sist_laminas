@extends('layouts.app')
@section('title', ' - Editar Lamina') 
@section('content')
<style>
  .img-container,
  .img-preview {
    background-color: #f7f7f7;
    text-align: center;
    border-style: inset outset;
    width: 100%;
  }
  .docs-preview {
    margin-right: -1rem;
  }

  .img-preview {
    float: left;
    margin-bottom: 0.5rem;
    margin-right: 0.5rem;
    overflow: hidden;
  }

  .img-preview > img {
    max-width: 100%;
  }

  .barElements {
    background: #840e45;
    border-radius: 35px;
  }

  .barFrame {
    background: #840e45;
    border-radius: 35px;
  }

  .rellenoBtn {
    background: #000 !important;
  }
</style>

<form id="redirect-canvas" action="{{ route('file.store') }}" method="POST" target="frmeCanvas" class="d-none">
    @csrf
    <input type="hidden" name="canvasimg" id="canvasimg">
</form>

<div class="container-fluid docs-buttons">
  <div class="row">
    <div class="col-2 barElements py-5">
      <div id="divRecortar" class="col-12 text-center">
        <button type="button" class="btn btn-outline-danger btn-rounded waves-effect btn-block py-3 rellenoBtn" data-method="getCroppedCanvas">
          <span class="h4 docs-tooltip text-white" data-toggle="tooltip" data-animation="false">
            CORTAR <i class="fa fa-scissors fa-3x pl-3" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="row justify-content-md-center pt-4">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="setDragMode" data-option="move" title="MOVER">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="MOVER">
                <span class="fa fa-arrows-alt fa-2x text-white"></span>
            </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="setDragMode" data-option="crop" title="RECORTE">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="RECORTE">
                <span class="fa fa-square-o fa-2x text-white"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="zoom" data-option="0.1" title="+ ZOOM">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="+ ZOOM">
              <span class="fa fa-search-plus fa-2x text-white"></span>
          </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="zoom" data-option="-0.1" title="- ZOOM">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="- ZOOM">
              <span class="fa fa-search-minus fa-2x text-white"></span>
          </span>
          </button>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="move" data-option="-10" data-second-option="0" title="MOVER IZQUIERDA">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="MOVER IZQUIERDA">
                <span class="fa fa-arrow-left fa-2x text-white"></span>
            </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="move" data-option="10" data-second-option="0" title="MOVER DERECHA">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="MOVER DERECHA">
                <span class="fa fa-arrow-right fa-2x text-white"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="move" data-option="0" data-second-option="-10" title="MOVER ARRIBA">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="MOVER ARRIBA">
              <span class="fa fa-arrow-up fa-2x text-white"></span>
          </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="move" data-option="0" data-second-option="10" title="MOVER ABAJO">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="MOVER ABAJO">
              <span class="fa fa-arrow-down fa-2x text-white"></span>
          </span>
          </button>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="reset" title="REINICIAR">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false">
              <span class="fa fa-eraser fa-2x text-white"></span>
            </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn  btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="rotate" data-option="-45" title="ROTAR IZQUIEDA 45 GRADOS">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="ROTAR IZQUIEDA 45 GRADOS">
              <span class="fa fa-undo fa-2x text-white"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="rotate" data-option="45" title="ROTAR DERECHA 46 GRADOS">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="ROTAR DERECHA 46 GRADOS">
              <span class="fa fa-repeat fa-2x text-white"></span>
            </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="scaleX" data-option="-1" title="VOLTEAR HORIZONTAL">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="VOLTEAR HORIZONTAL">
              <span class="fa fa-arrows-h fa-2x text-white"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="scaleY" data-option="-1" title="VOLTEAR VERTICAL">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="VOLTEAR VERTICAL">
              <span class="fa fa-arrows-v fa-2x text-white"></span>
            </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="crop" title="INICIAR RECORTE">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="INICIAR RECORTE">
              <span class="fa fa-check fa-2x text-white"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <button type="button" class="btn btn-outline-danger waves-effect btn-rounded px-5 rellenoBtn" data-method="clear" title="LIMPIAR RECUADRO">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="LIMPIAR RECUADRO">
              <span class="fa fa-times fa-2x text-white"></span>
            </span>
          </button>
        </div>
        <div class="col px-0 mx-0" style="flex-grow: 0">
          <label class="btn btn-outline-danger waves-effect btn-upload btn-rounded px-5 rellenoBtn" for="inputImage" title="SUBIR IMAGEN">
              <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
              <span class="docs-tooltip" data-toggle="tooltip" data-animation="false">
              <span class="fa fa-upload fa-2x text-white"></span>
              </span>
          </label>
        </div>
      </div>
    </div>
    <div class="col-2 barFrame py-5" style="display:none;">
      <div id="divRegresar" class="col-12 text-center">
        <a type="button" href="{{ route('file.edit', $lamina->tbllmnauuid ) }}" class="btn btn-outline-danger rellenoBtn btn-rounded waves-effect btn-block py-3">
          <span class="h4 docs-tooltip text-white" data-toggle="tooltip" data-animation="false">
            REGRESAR <i class="fa fa-arrow-circle-left fa-3x pl-3" aria-hidden="true"></i>
          </span>
        </a>
      </div>
      <div class="col-12 text-center pt-3">
        <button id="btnHorientacion" type="button" class="btn btn-outline-danger btn-rounded rellenoBtn waves-effect btn-block py-3 px-2">
          <span class="h4 docs-tooltip text-white" data-toggle="tooltip" data-animation="false">
            HORIENTACION <i class="fa fa-arrows fa-3x pl-3" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="col-12 text-center pt-3">
        <button onclick="document.getElementById('frmeCanvas').contentWindow.imprimir_pdf()" type="button" class="btn btn-outline-danger rellenoBtn btn-rounded waves-effect btn-block py-3">
          <span class="h4 docs-tooltip text-white" data-toggle="tooltip" data-animation="false">
            DESCARGA <i class="fa fa-download fa-3x pl-3" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="col-12 text-center pt-3">
        <button id="recortarIframe" type="button" class="btn btn-outline-danger btn-rounded rellenoBtn waves-effect btn-block py-3">
          <span class="h4 docs-tooltip text-white" data-toggle="tooltip" data-animation="false">
            CORTAR <i class="fa fa-scissors fa-3x pl-3" aria-hidden="true"></i>
          </span>
        </button>
      </div>
    </div>
    <div id="imgPanel" class="col-10 px-0">
      <img id="image" src="{{ asset($lamina->tbllmnaimgn) }}" class="img-fluid" alt="Picture">
    </div>
    <div id="imgFrame" class="col-10" style="display: none;">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe id="frmeCanvas" name="frmeCanvas" class="embed-responsive-item"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-outline-primary waves-effect btn-block" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
            </div>
        </div>
      </div>
  </div>
</div>
@section('page-js-script')
<script>

$(function () {
  'use strict';

  var console = window.console || { log: function () {} };
  var URL = window.URL || window.webkitURL;
  var $image = $('#image');
  var $download = $('#download');
  var options = {
    preview: '.img-preview'
  };
  var originalImageURL = $image.attr('src');
  var uploadedImageName = 'cropped.jpg';
  var uploadedImageType = 'image/jpeg';
  var uploadedImageURL;

  // Cropper
  $image.on({
    ready: function (e) {
      console.log(e.type);
    },
    cropstart: function (e) {
      console.log(e.type, e.detail.action);
    },
    cropmove: function (e) {
      console.log(e.type, e.detail.action);
    },
    cropend: function (e) {
      console.log(e.type, e.detail.action);
    },
    crop: function (e) {
      console.log(e.type);
    },
    zoom: function (e) {
      console.log(e.type, e.detail.ratio);
    }
  }).cropper(options);

  // Buttons
  if (!$.isFunction(document.createElement('canvas').getContext)) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }

  // Download
  if (typeof $download[0].download === 'undefined') {
    $download.addClass('disabled');
  }

  // Options
  $('.docs-toggles').on('change', 'input', function () {
    var $this = $(this);
    var name = $this.attr('name');
    var type = $this.prop('type');
    var cropBoxData;
    var canvasData;

    if (!$image.data('cropper')) {
      return;
    }

    if (type === 'checkbox') {
      options[name] = $this.prop('checked');
      cropBoxData = $image.cropper('getCropBoxData');
      canvasData = $image.cropper('getCanvasData');

      options.ready = function () {
        $image.cropper('setCropBoxData', cropBoxData);
        $image.cropper('setCanvasData', canvasData);
      };
    } else if (type === 'radio') {
      options[name] = $this.val();
    }

    $image.cropper('destroy').cropper(options);
  });

  // Methods
  $('.docs-buttons').on('click', '[data-method]', function () {
    var $this = $(this);
    var data = $this.data();
    var cropper = $image.data('cropper');
    var cropped;
    var $target;
    var result;

    if ($this.prop('disabled') || $this.hasClass('disabled')) {
      return;
    }

    if (cropper && data.method) {
      data = $.extend({}, data); // Clone a new one

      if (typeof data.target !== 'undefined') {
        $target = $(data.target);

        if (typeof data.option === 'undefined') {
          try {
            data.option = JSON.parse($target.val());
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      cropped = cropper.cropped;

      switch (data.method) {
        case 'rotate':
          if (cropped && options.viewMode > 0) {
            $image.cropper('clear');
          }

          break;

        case 'getCroppedCanvas':
          if (uploadedImageType === 'image/jpeg') {
            if (!data.option) {
              data.option = {};
            }

            data.option.fillColor = '#fff';
          }

          break;
      }

      result = $image.cropper(data.method, data.option, data.secondOption);

      switch (data.method) {
        case 'rotate':
          if (cropped && options.viewMode > 0) {
            $image.cropper('crop');
          }

          break;

        case 'scaleX':
        case 'scaleY':
          $(this).data('option', -data.option);
          break;

        case 'getCroppedCanvas':
          if (result) {
            $("#imgPanel").hide();
            $("#imgFrame").show();
            $(".barElements").hide();
            $(".barFrame").show();
              $("#canvasimg").val(result.toDataURL(uploadedImageType));
              setTimeout(function(){ 
                document.getElementById('redirect-canvas').submit(); 
                // $("#frmeCanvas").attr('src','{{ route('file.store') }}');
              }, 500);
          }

          break;

        case 'destroy':
          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
            uploadedImageURL = '';
            $image.attr('src', originalImageURL);
          }

          break;
      }

      if ($.isPlainObject(result) && $target) {
        try {
          $target.val(JSON.stringify(result));
        } catch (e) {
          console.log(e.message);
        }
      }
    }
  });

  // Keyboard
  $(document.body).on('keydown', function (e) {
    if (e.target !== this || !$image.data('cropper') || this.scrollTop > 300) {
      return;
    }

    switch (e.which) {
      case 37:
        e.preventDefault();
        $image.cropper('move', -1, 0);
        break;

      case 38:
        e.preventDefault();
        $image.cropper('move', 0, -1);
        break;

      case 39:
        e.preventDefault();
        $image.cropper('move', 1, 0);
        break;

      case 40:
        e.preventDefault();
        $image.cropper('move', 0, 1);
        break;
    }
  });

  // Import image
  var $inputImage = $('#inputImage');

  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;

      if (!$image.data('cropper')) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
          uploadedImageName = file.name;
          uploadedImageType = file.type;

          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
          }

          uploadedImageURL = URL.createObjectURL(file);
          $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
          $inputImage.val('');
        } else {
          window.alert('Please choose an image file.');
        }
      }
    });
  } else {
    $inputImage.prop('disabled', true).parent().addClass('disabled');
  }

  $("#recortarIframe").click(function() {
    $("#imgPanel").show();
    $("#imgFrame").hide();
    $(".barElements").show();
    $(".barFrame").hide();
    // $("#image").attr('src',$("#canvasimg").val());
    $("#image").cropper('destroy').attr('src', $("#canvasimg").val()).cropper(options);
  });
});

$("#divRegresar").click(function() {
  $("#imgPanel").show();
  $("#imgFrame").hide();
  $(".barElements").show();
  $(".barFrame").hide();
});
var horientacion;
$("#btnHorientacion").click(function() {
  $("#frmeCanvas").contents().find("#someDiv").removeClass("hidden");

  if($("#frmeCanvas").contents().find("#opcion").val() == 0){
      $("#frmeCanvas").contents().find("#PaginaCentral").removeAttr('layout');
      $("#frmeCanvas").contents().find("#opcion").attr('value',1);
      horientacion = 'portrait';
  } else {
      $("#frmeCanvas").contents().find("#PaginaCentral").attr('layout','landscape');
      $("#frmeCanvas").contents().find("#opcion").attr('value',0);
      horientacion = 'landscape';
  }
});

</script>
@stop
@endsection