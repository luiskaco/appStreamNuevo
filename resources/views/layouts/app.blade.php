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

    <script src="{{ asset('js/chat.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">




        <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-database.js"></script>
    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyCnO4SGc29qqA3TCl1es8C9Zys9upkJ5p4",
            authDomain: "encuentros2022-18413.firebaseapp.com",
            projectId: "encuentros2022-18413",
            storageBucket: "encuentros2022-18413.appspot.com",
            databaseURL: "https://encuentros2022-18413-default-rtdb.firebaseio.com/",
            messagingSenderId: "582400969009",
            appId: "1:582400969009:web:a33606cb0d017e4debc810",
            measurementId: "G-DLFSSHJ7D1"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
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
            background-color: #C9005C;
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


        @media(min-width:768px){
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
        }


        /*dropdown*/

        .navbar-light .navbar-toggler {
            color: rgb(253 253 253 / 50%);
            border-color: rgb(255 255 255 / 45%);
        }

        /* .navbar-light .navbar-toggler-icon {

        background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg'
        width='30' height='30'
        viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 280, 280, 280.5%29'
        stroke-linecap='round' stroke-miterlimit='10'
        stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
      } */

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




    @include('layouts.partials.button-soporte')

    @auth

        @include('layouts.modals.modalAgenda')

        @include("layouts.footer")

    @endauth


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous">
    </script>

        <script src="{{ asset('js/jquery.emojiFace.js') }}" ></script>
    <script>
        $('#messageInput').emoji({
            fontSize:'20px',
            place:'after'
        });

        function showEmoji() {
            $('#listaemojis').show();
            $('#messageInput').focus();
            setTimeout(function () {
                $(document).on('click', closeEmoji);
            }, 1);
        }

        function closeEmoji() {
            $('#listaemojis').hide();
            $(document).off('click', closeEmoji);
        }
        function clickEmoji(ev) {

            if ($('#messageInput').get(0).selectionStart || $('#messageInput').get(0).selectionStart == '0') {
                var startPos = $('#messageInput').get(0).selectionStart;
                var endPos = $('#messageInput').get(0).selectionEnd;
                var primeraparte = $('#messageInput').val().substring(0, startPos);
                var segundaparte = $('#messageInput').val().substring(endPos, $('#messageInput').val().length)
                $('#messageInput').val( primeraparte + ev.innerHTML + segundaparte);
            } else {
                $('#messageInput').val(ev.innerHTML) ;
            }

            closeEmoji();

            $('#messageInput').focus();
            $('#messageInput').selectionStart = startPos + 2;
            $('#messageInput').selectionEnd = endPos + 2;
        }
    </script>
</body>
</html>
