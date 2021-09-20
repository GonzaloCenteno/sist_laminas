@foreach($laminas as $lamina)
    <div class="col-3">
        <div class="card  bg-white" style="background-color: rgba(245,245,220,0.6) !important;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.4);">
            <img class="card-img-top img-fluid imglam" src="{{ asset($lamina->tbllmnaimgn) }}" alt="{{ $lamina->tbllmnanomb }}">
            <div class="card-body" >
                <div class="row">
                    <div class="col-10">
                        <h5 class="card-title">{{ $lamina->tbllmnanomb }}</h5> 
                    </div>
                    <div class="col-2">
                        <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text h6">{{ $lamina->categoria->tblctgadesc }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer" style="border:none !important">
                <div class="row justify-content-md-center">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="{{ route('file.edit', $lamina->tbllmnauuid ) }}" class="btn btn-sm btn-unique btn-rounded">EDITAR</a>
                        <a href="{{ route('file.show', $lamina->tbllmnauuid) }}?tipo=1" class="btn btn-sm btn-unique btn-rounded">DESCARGA</a>
                        <a href="{{ route('file.show', $lamina->tbllmnauuid) }}?tipo=3" class="btn btn-sm btn-unique btn-rounded">VER MÁS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
    <div class="col-12 pt-5">
        <div class="row justify-content-md-center">
            {!! $laminas->links() !!}
        </div>
    </div> 
</div>