@extends('layouts.app')

@section('content')

<div class="main">
    <div class="container">
        <div class="row">

           @include('auth.partials.logo')

            <div class="col-md-7 d-flex align-items-center py-4">
                <div class="col-lg-7 col-12 col-md-10 col-sm-12 container-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label  class="label-title">{{ __('Entrar') }}</label>

                            <input
                                id="dni"
                                type="number"
                                class="form-control input-style @error('dni') is-invalid @enderror"
                                name="dni" value="{{ old('dni') }}"
                                required autocomplete="dni"
                                autofocus
                                placeholder="DNI"
                            >

                            @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <input id="password" type="hidden" class="form-control @error('password') is-invalid @enderror" name="password"  value="12345678" autocomplete="current-password">
                        <div class="form-group ">

                            <button type="submit" class="btn btn-primary btn-block  custom-button">
                                {{ __('Ingresar') }}
                            </button>
                        </div>
                    </form>

                    <a href="register" class="text-white" >¿No tienes usuario? Registrate aquí</a>
                </div>

            </div>


        </div> <!-- end row -->

    </div> <!-- container -->
</div>


@endsection
