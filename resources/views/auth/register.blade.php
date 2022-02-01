@extends('layouts.app')

@section('content')

<div class="main">
    <div class="container">
        <div class="row">

            @include('auth.partials.logo')

            <div class="col-md-7 d-flex align-items-center py-4 row" style="margin: 0px !important">
                <div class="col-12 container-title  text-center pb-4">
                    <h1 class="font-weight-bold text-white custom-form-title">¡Acompáñanos en esta travesía!</h1>
                </div>

                <div class="col-lg-8 col-12 col-md-10 col-sm-12 container-form">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label
                                for="Nombre"
                                class="label-title">{{ __('Registro') }}</label>

                                <input id="name" type="text" data-id="1"
                                class="form-control bgInput input-style @error('name') is-invalid
                                @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required autocomplete="name" autofocus
                                    placeholder="Nombre"
                                    >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        </div>
                        <div class="form-group">

                                <input id="dni" type="number"
                                        class="form-control bgInput input-style @error('dni') is-invalid @enderror"
                                        name="dni"
                                        value="{{ old('dni') }}"
                                        placeholder="DNI"
                                        data-id="2"
                                        required autocomplete="dni"
                                        autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        </div>
                        <div class="form-group">

                                <input id="agency"
                                    type="text"
                                    class="form-control bgInput input-style @error('agency') is-invalid @enderror"
                                    name="agency"
                                    data-id="3"
                                    value="{{ old('agency') }}"
                                    required autocomplete="agency"
                                    autofocus
                                    placeholder="Agencia"
                                >

                                @error('agency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        </div>
                        <div class="form-group">

                        <label class="text-white">

                            <input id="agree"
                            type="checkbox"
                            class="input-style @error('agree') is-invalid @enderror"
                            name="agree"
                            value="{{ old('agree') }}"
                            required autocomplete="agree"
                            autofocus
                        > Acepto uso de imagen y uso de datos personales.

                            <span data-toggle="modal"
                            data-target="#permitaccep_id"
                            style="cursor:pointer !important; color: #fff !important; font-weight: 900;">Leer más</span>
                        </label>

                        @error('agency')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>
                        <input id="password"
                            type="hidden"
                            class="form-control
                            @error('password') is-invalid
                            @enderror"
                            name="password"
                            required autocomplete="new-password"
                            value="12345678"
                         >
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-block custom-button ">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="/login" class="text-white " >Regresar</a>
                    </div>

                </div>

            </div>


        </div> <!-- end row -->

    </div> <!-- container -->
</div>
@endsection


