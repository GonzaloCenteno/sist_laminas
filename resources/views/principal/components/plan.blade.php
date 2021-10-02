<div class="container py-5">
    <div class="row px-5 mx-5">
        @foreach($planes as $plan)
        <div class="col-4">
            <div class="card shadow-lg text-center" style="width: 18rem;border-radius: 30px; !important">
                <div class="card-body text-center">
                    <div class="col-12 py-3">
                        <img src="{{ asset('img/plan.jfif') }}" class="img-fluid">
                    </div>
                    <h2 class="card-tittle font-weight-bold">{{ $plan->tblplanprdo }} Meses</h2>
                    <h6 class="card-subtitle mb-2 text-muted">Suscripcion</h6>
                    <p class="card-title pt-3 pb-5"><span class="font-weight-bold h1">s/{{ $plan->tblplancost }}</span> <span>/{{ $plan->tblplanprdo }} meses</span></p>
                    <p class="font-weight-bold h3 pb-3">{{ $plan->tblplannomb }}</p>
                    <p class="card-text">{{ $plan->tblplandesc }}</p>
                    <p class="card-text">{{ $plan->tblplanprdo }} meses</p>
                    <p class="card-text">24/7 Soporte</p>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-rounded btn-outline-danger waves-effect nav-link" href="{{ url('login') }}">
                                <span>SUSCRIBIRSE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>