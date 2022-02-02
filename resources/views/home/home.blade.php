@extends('layouts.app')

@section('css')
  @include('home.partials.homecss')
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

                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Tmd_uPFwK5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-5 col-sm-5 d-flex align-items-center justify-content-center">
                    <div class="container-chat-video" >
                        <div class="row">
                        <div id="messagesDiv" ></div>
                        </div>

<div class="row">
                            <input type="text" class="form-control" id='messageInput' placeholder='Chatea Aquí' onkeypress="escribepress('{{ Auth::user()->name }}',event)"   aria-describedby="button-addon2">

</div>                       <div class="row">
                                <button class="btn btn-outline-secondary" type="button"  onclick="escribe('{{ Auth::user()->name }}')" id="button-addon2">></button>
                            </div>


                    </div>
                </div >
            </div>
                <div class="row col-12">
                    <div class="col-lg-8 col-12 col-md-7 col-sm-7 container-button-encuesta d-flex align-items-center pt-3" style="padding: 0">
                        <a href="https://forms.office.com/pages/responsepage.aspx?id=iydxLg1u70uA-rdAnenWJ1LnW2IP4pxBihLFC5ne7DdUNjVaU01ZUEZMUE9ENjYyUU5DMllUSzlERi4u" class="btn  custom-button-encuesta font-weight-bold text-white"
                        target="_blank">
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

@endsection


