@extends('layouts.app')

@section('content-login')
    <div class="card shadow-lg p-3 mb-5 bg-white wow animated fadeInDown" style="border-radius: 25px; !important">
        <h5 class="card-header shadow white-text text-center py-3" style="background-color: #fff;border-radius: 25px; !important">
            <img src="{{ asset('img/logo-parrot.png') }}" class="img-fluid">
        </h5>
        <div class="card-body px-5 mx-3">
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('img/parrot.png') }}" class="img-fluid">
                </div>
                <div class="col-7">
                    <p class="h4 mb-2 text-center">INICIAR SESION</p>
                    <form method="POST" action="{{ route('login') }}" class="text-center" style="color: #757575;" novalidate>
                        @csrf
                        <div class="md-form md-outline form-sm input-with-pre-icon">
                            <i class="fa fa-user input-prefix"></i>
                            <input type="text" id="email" name="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>
                            <label for="email">Usuario</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="md-form md-outline form-sm input-with-pre-icon">
                            <i class="fa fa-lock input-prefix"></i>
                            <input type="password" id="password" name="password" autocomplete="off" class="form-control @error('password') is-invalid @enderror">
                            <label for="password">Contraseña</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-outline-primary btn-rounded btn-block waves-effect">ACEPTAR</button>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-sm btn-outline-primary btn-rounded btn-block waves-effect" href="{{ route('register') }}">REGISTRAR</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
