<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Grupo 2022') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

        /*UTLIDADES*/

        /*focus de boostrp*/
        .form-control:focus {
            border-color: white;
            box-shadow: 0 0 0 0.2rem #C9005C;
        }

        /*sombra de boostrp*/
        .modal-open .modal {
                background: #0000007a;
            }


        .bgPrincipal{
            background-size:cover;
            background-image: url(http://127.0.0.1:8000/img/bg/bgPrincipal.jpg);
            background-repeat: no-repeat;
            background-color: #088398;
        }

        .bg01{
            background-size:cover;
            background-image: url(http://127.0.0.1:8000/img/bg/bg01.jpg);
            background-repeat: no-repeat;
            background-color: #088398;
        }

        .bg02{
            background-size:cover;
            background-image: url(http://127.0.0.1:8000/img/bg/bg02.jpg);
            background-repeat: no-repeat;
            background-color: #785AC2;
        }

        .bg03{
            background-size:cover;
            background-image: url(http://127.0.0.1:8000/img/bg/bg03.jpg);
            background-repeat: no-repeat;
            background-color: #D7573A;
        }

        /*END UTILIDADES*/

        .main {
            display: flex;
            align-items: center;
            height: 100vh;
        }

        /** Menu **/

        .navbar-nav .nav-item {
            position: relative;
        }

        .navbar-nav .nav-item a {
            color:#fff  !important;
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .dropdown-menu {
            background-color:#FCA600;
            box-shadow: -4px 2px 5px -6px rgba(217,217,217,0.83);
            -webkit-box-shadow: -4px 2px 5px -6px rgba(217,217,217,0.83);
            -moz-box-shadow: -4px 2px 5px -6px rgba(217,217,217,0.83);
        }

        .dropdown-menu .dropdown-item:hover{
            background-color: #FF155B;
        }

        .navbar-nav .nav-item a.actived {
            color: #f9e3cf !important;
        }

        .navbar-nav .nav-item a.actived:after{
            content: '';
            /* padding-top: 1rem; */
            position: absolute;
            height: 2px;
            bottom: 0;
            width: 70%;
            background: #f9e3cf;
            margin: auto;
            left: 0;
            right: 0;
        }

        /** Formulario **/
        .section-form {
            display: flex;
            align-items: center;
        }

        .label-title{
            color:#fff;
            font-weight: 700;
            font-size: 1.4rem;
        }

        .input-style{
            -webkit-border-radius: 15px 15px 15px 15px !important;
            -moz-border-radius: 15px 15px 15px 15px !important;
            border-radius: 15px 15px 15px 15px !important;
            padding: 17px;
        }

        .container-form{
            background: #ffffff40;
            padding: 30px;
            margin: auto;

        }

        .form-control:focus{
            border-color: white;
            box-shadow: 0 0 0 0.2rem #c9005c52;
        }

        .invalid-feedback
        {
            color: #fff !important;
            font-weight: 700;
        }

        .custom-button{
            background:#C9005C !important;
            border:#C9005C !important;
            border-radius: 6px;
        }

        @media screen and (max-width:550px){
                .custom-img{
                    max-width: 110px;
                }

                .container-form {
                    padding: 25px 30px;
                }

                .custom-form-title{
                    font-size:25px;
                }

                .container-title{
                    padding: 0 !important;
                }

                .label-title {
                    font-size: 1.1rem;
                }
            }


    </style>

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

    @include('layouts.modal')

    {{-- @include('layouts.partials.button-soporte')

    @include("layouts.footer") --}}

</body>
</html>
