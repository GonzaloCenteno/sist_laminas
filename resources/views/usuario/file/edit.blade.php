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

  .preview-lg {
    height: 15rem;
    width: 20rem;
  }
  .preview-md {
    height: 12rem;
    width: 12rem;
  }
</style>
<div class="container docs-buttons pt-5">
  <div class="row">
      <div class="col-1 offset-1">
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="setDragMode" data-option="move" title="Move">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
              <span class="fa fa-arrows-alt fa-2x"></span>
          </span>
          </button>
      </div>
      <div class="col-1">  
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="setDragMode" data-option="crop" title="Crop">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
              <span class="fa fa-square-o fa-2x"></span>
          </span>
          </button>
      </div>
      <div class="col-1"> 
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="zoom" data-option="0.1" title="Zoom In">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)">
              <span class="fa fa-search-plus fa-2x"></span>
          </span>
          </button>
      </div>
      <div class="col-1"> 
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="zoom" data-option="-0.1" title="Zoom Out">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)">
              <span class="fa fa-search-minus fa-2x"></span>
          </span>
          </button>
      </div>
      <div class="col-1">
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, -10, 0)">
              <span class="fa fa-arrow-left fa-2x"></span>
          </span>
          </button>
      </div>
      <div class="col-1">
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="move" data-option="10" data-second-option="0" title="Move Right">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 10, 0)">
              <span class="fa fa-arrow-right fa-2x"></span>
          </span>
          </button>
      </div>
      <div class="col-1">
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, -10)">
              <span class="fa fa-arrow-up fa-2x"></span>
          </span>
          </button>
      </div>
      <div class="col-1">
          <button type="button" class="btn btn-outline-primary waves-effect" data-method="move" data-option="0" data-second-option="10" title="Move Down">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, 10)">
              <span class="fa fa-arrow-down fa-2x"></span>
          </span>
          </button>
      </div> 
      <div class="col-1">
        <button type="button" class="btn btn-outline-primary waves-effect" data-method="reset" title="REINICIAR">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false">
            <span class="fa fa-eraser fa-2x"></span>
        </span>
        </button>
      </div>
  </div>
  <div class="row">
      <div class="col-1 offset-2">
      <button type="button" class="btn btn-outline-primary waves-effect" data-method="rotate" data-option="-45" title="Rotate Left">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -45)">
          <span class="fa fa-undo fa-2x"></span>
          </span>
      </button>
      </div>
      <div class="col-1">
      <button type="button" class="btn btn-outline-primary waves-effect" data-method="rotate" data-option="45" title="Rotate Right">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 45)">
          <span class="fa fa-repeat fa-2x"></span>
          </span>
      </button>
      </div>
      <div class="col-1">
      <button type="button" class="btn btn-outline-primary waves-effect" data-method="scaleX" data-option="-1" title="Flip Horizontal">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)">
          <span class="fa fa-arrows-h fa-2x"></span>
          </span>
      </button>
      </div>
      <div class="col-1">
        <button type="button" class="btn btn-outline-primary waves-effect" data-method="scaleY" data-option="-1" title="Flip Vertical">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)">
            <span class="fa fa-arrows-v fa-2x"></span>
            </span>
        </button>
      </div>
      <div class="col-1">
        <button type="button" class="btn btn-outline-primary waves-effect" data-method="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;crop&quot;)">
            <span class="fa fa-check fa-2x"></span>
            </span>
        </button>
      </div>
      <div class="col-1">
        <button type="button" class="btn btn-outline-primary waves-effect" data-method="clear" title="Clear">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;clear&quot;)">
            <span class="fa fa-times fa-2x"></span>
            </span>
        </button>
      </div>
      <div class="col-1">
        <label class="btn btn-outline-primary waves-effect btn-upload" for="inputImage" title="SUBIR IMAGEN">
            <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false">
            <span class="fa fa-upload fa-2x"></span>
            </span>
        </label>
      </div> 
      <!-- <div class="col-1">
      <button type="button" class="btn btn-outline-primary waves-effect" data-method="disable" title="Disable">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;disable&quot;)">
          <span class="fa fa-lock fa-2x"></span>
          </span>
      </button>
      </div>
      <div class="col-1">
      <button type="button" class="btn btn-outline-primary waves-effect" data-method="enable" title="Enable">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;enable&quot;)">
          <span class="fa fa-unlock fa-2x"></span>
          </span>
      </button>
      </div> -->
  </div> 
  <div class="row py-3">
      <div class="col-4 offset-3">
        <button type="button" class="btn btn-outline-danger btn-rounded waves-effect btn-block" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { maxWidth: 4096, maxHeight: 4096 })">
            DESCARGAR IMAGEN
            </span>
        </button>
      </div>
      <!-- <div class="col-4">
      <button type="button" class="btn btn-outline-success waves-effect btn-block" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
          RECORTE TAMAÑO 160&times;90
          </span>
      </button>
      </div>
      <div class="col-4">
      <button type="button" class="btn btn-outline-success waves-effect btn-block" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
          <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
          RECORTE TAMAÑO 320&times;180
          </span>
      </button>
      </div> -->
  </div>
  <div class="row">
    <div class="col-12">
        <img id="image" src="{{ asset($lamina->tbllmnaimgn) }}" class="img-fluid" alt="Picture">
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
            // Bootstrap's Modal
            $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

            if (!$download.hasClass('disabled')) {
              download.download = uploadedImageName;
              $download.attr('href', result.toDataURL(uploadedImageType));
            }
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
});

</script>
@stop
@endsection