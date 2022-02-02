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

    @auth
        <input type="hidden" name="group2022" value="{{Auth::user()->group}}" id="group2022" />
    @endauth

    <script src="{{ asset('js/chat.js') }}" defer></script>

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
