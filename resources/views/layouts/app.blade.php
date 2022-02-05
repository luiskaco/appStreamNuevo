<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="shortcut icon" href="{{asset('/img/a8sbh-4fhjf-001.ico')}}"/>

    <title>{{ config('app.name', 'Grupo 2022') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="theme-color" content="#C9005C" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta name="description" content="Evento corporativo." >
    <meta name="author" content="Desarrolladores" >
    <meta name="geo.placename" content="Lima, Perú" >

    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:creator" content="" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Style -General -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Dropzone -->
    <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">



    @yield('css')

</head>
<body class="bgPrincipal">

    <div id="app">
        @auth
            @include('layouts.nav')
        @endauth

        <main>
            @yield('content')
        </main>
    </div>

    @yield('js')

    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @guest
         @include('layouts.modals.modalPermiso')
    @endguest

    @include('layouts.partials.button-soporte')

    @auth

        @include('layouts.modals.modalAgenda')

        @include("layouts.footer")

    @endauth

</body>
</html>
