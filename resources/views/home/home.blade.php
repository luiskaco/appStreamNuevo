@extends('layouts.app')

@section('css')
  @include('home.partials.homecss')

  <style>
      .chatea{
        display: grid;
        padding: 10px 15px;
        align-items: center;
        grid-template-columns: 1fr 32px;
        grid-gap: 5px;
        justify-content: center;
      }
  </style>
@endsection

@section('content')
<div class="main">
        <div class="custom-container-full container-evento" >
            <div class="row col-12" style="padding: 0">
                <div class="row col-12" style="padding: 0">
                <div class="  col-lg-8 col-12 col-md-7 col-sm-7 d-flex align-items-center row container-title-video" style="margin: 0px !important">
                    <div class="col-12 container-title-button row text-left pb-3">
                        <h5 class="font-weight-bold text-white custom-form-title">Muéstranos cómo estás viviendo tu travesía</h5>
                        {{-- <button type="button" class="btn  custom-button-photo font-weight-bold text-white" >
                            Sube tu foto aquí <i class="fas fa-upload"></i>
                        </button> --}}

                        @include('layouts.partials.button-popup-add-photo')
                        @include('layouts.modals.modalUpload')
                    </div>
                    <div class="col-lg-12 col-12 col-md-12 col-sm-12 container-video">

                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZmxcaCvwZIU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-5 col-sm-5 d-flex align-items-center justify-content-center">
                    <div class="container-chat-video" >
                        <div class="row">
                        <div id="messagesDiv" ></div>
                        </div>

<div class="row chatea">
                            <input type="text" class="form-control" id='messageInput' placeholder='Chatea Aquí' onkeypress="escribepress('{{ Auth::user()->name }}',event)"   aria-describedby="button-addon2">

</div>                       <div class="row">
                                <button class="btn  custom-button-encuesta font-weight-bold text-white"
                                type="button"  onclick="escribe('{{ Auth::user()->name }}')"
                                id="button-addon2" style="margin: 0 auto 15px;">Enviar</button>
                            </div>


                    </div>
                </div >
            </div>
                <div class="row col-12">
                    <div class="col-lg-8 col-12 col-md-7 col-sm-7 container-button-encuesta d-flex align-items-center pt-3" style="padding: 0">
                        <a
                            href="https://forms.office.com/pages/responsepage.aspx?id=iydxLg1u70uA-rdAnenWJ1LnW2IP4pxBihLFC5ne7DdUNjVaU01ZUEZMUE9ENjYyUU5DMllUSzlERi4u"
                            class="btn custom-button-encuesta font-weight-bold text-white"
                            target="_blank"
                            style="display: none;"
                            id="mostrar">
                            Encuesta
                        </a>
                    </div>
                </div>

            </div> <!-- end row -->
        </div>
@endsection

@section('css')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
     <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">

@endsection

@section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js" integrity="sha512-4p9OjnfBk18Aavg91853yEZCA7ywJYcZpFt+YB+p+gLNPFIAlt2zMBGzTxREYh+sHFsttK0CTYephWaY7I3Wbw==" crossorigin="anonymous"></script>
        <script src="{{asset('js/dropzoneCustom.js')}}" ></script>

        <script>
            setInterval(() => {
                DateElementShow();
            }, 60000);


            function DateElementShow(){
                const date = new Date();
                const hoursCompare = `${date.getHours()}:${date.getMinutes()}`
                    //  console.log(`${date.getHours()}:${date.getMinutes()}`)
                    if(hoursCompare >= "11:10"  &&  hoursCompare <= "18:13") {
                        // console.log("Son iguales")
                        document.getElementById('mostrar').style.display = 'block';
                    }else{
                        // console.log("No son iguales")
                        document.getElementById('mostrar').style.display = 'none';
                    }
            }
        </script>

     {{-- Lo ubico aca porque solo se usa ese codigo aqui  --}}

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

@endsection


