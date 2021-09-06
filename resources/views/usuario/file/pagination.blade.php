@foreach($laminas as $lamina)
    <div class="col-3">
        <div class="card shadow-lg bg-white" style="border-radius: 10%">
            <img class="card-img-top img-fluid" src="{{ asset($lamina->tbllmnaimgn) }}" alt="Card image cap">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h5 class="card-title">{{ $lamina->tbllmnanomb  }}</h5> 
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
            <div class="card-footer">
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('file.edit', $lamina->tbllmnauuid ) }}" class="btn btn-sm btn-outline-danger btn-rounded btn-block waves-effect">EDITAR</a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-sm btn-outline-danger btn-rounded btn-block waves-effect">DESCARGA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="container pt-5">
    <div class="row justify-content-md-center">
        {!! $laminas->links() !!}
    </div>
</div>