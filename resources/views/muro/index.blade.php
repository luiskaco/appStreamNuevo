
@extends('layouts.app')

@section('content')

    <div class="container">
    <div>
    <input type="hidden" name="grupoID" value="{{$id}}" id="groupID"/>

    <div class="container mt-4">
        <div class="row justify-content-center flex-column text-center headingSocial">
            <h3>Galería</h3>
            <p>Sube tu fotografía y cuéntanos cuál es tu sueño o meta para la Travesía 2022</p>
            <div class="containerBtn">
                <button type="button" class="btn btn-yellow" data-toggle="modal"
                data-target="#upload_id">
                    Sube tu foto Aquí
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 19 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.57985 0.131542C9.52547 0.0883189 9.47107 0.0450864 9.41876 0L9.10928 0.0029337C9.06976 0.0333239 9.02735 0.0617166 8.9848 0.0902104C8.89927 0.147476 8.81313 0.205151 8.74855 0.280272C7.33978 1.90353 5.93327 3.5289 4.52902 5.1564C4.45986 5.23322 4.40469 5.32181 4.36606 5.41808C4.21229 5.83922 4.50823 6.2452 4.97824 6.2496C5.47113 6.25286 5.96424 6.25178 6.45742 6.25069C6.70403 6.25015 6.95066 6.2496 7.1973 6.2496H7.41055V6.51129V14.261C7.41055 14.7644 7.6441 14.9991 8.14459 14.9991H10.3443C10.8989 14.9991 11.118 14.779 11.118 14.2219V6.24911H11.3506H13.5116C13.7456 6.2496 13.9434 6.18259 14.0841 5.98694C14.2732 5.72134 14.2427 5.43373 13.9874 5.13781C12.6312 3.56347 11.2708 1.99238 9.90619 0.424563C9.81084 0.315145 9.69537 0.223365 9.57985 0.131542ZM18.5309 18.2885V13.7592L16.0537 13.7558V17.4834H2.46906V13.7577H0.0101645C0.00580871 13.7812 0.00274135 13.8049 0.000976819 13.8287C0.000976819 14.2155 0.000732641 14.6023 0.000488449 14.9892C-0.000298358 16.2357 -0.0010853 17.4825 0.00629525 18.7292C0.00956013 18.924 0.0544272 19.1157 0.137822 19.2912C0.385404 19.8014 0.821575 19.9941 1.36993 19.9941H17.1393C17.1586 19.9941 17.178 19.9944 17.1973 19.9947C17.2359 19.9952 17.2745 19.9958 17.3129 19.9941C18.0029 19.9638 18.5043 19.4556 18.5309 18.7571C18.5335 18.6531 18.5327 18.5488 18.5318 18.4446C18.5314 18.3926 18.5309 18.3405 18.5309 18.2885Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <br><br>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="instagram-card">
                    <div class="instagram-card-header">
                        <span class="instagram-card-user-name">Margaret Vasque</span>
                    </div>
                    <div class="instagram-card-image gradient">
                        <img src="{{Storage::url('fotos/1643414635.jpg')}}" alt="imagen-"/>
                        <div class="instagram-card-content">
                             <p class="card-description"></p>
                        </div>

                    </div>
                    <div class="instagram-card-footer">
                        <p class="likes" id = heart>
                            <a class="action-icon-liked " >
                                <i class="fa fa-heart">
                                    </i>
                            </a><span id="count-">135</span> Me gusta</p>

                            <a class="linkComentario btnSearchComment">
                                <img src="{{'/img/enviar.png'}}" alt="imagen-" />
                            </a>
                    </div>
                </div><!--end item card-->
            </div><!-- end col-md- 6-->
        </div><!--- end row -->

    </div>

    <div class="container mt-4" >
        <hr class="lineSocial">
    <div>


   <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="container-cards" id="desct">
            </div>
        </div>
    </div>

    <div class="space-10">
    </div>


@include('layouts.modals.modalUpload')
@include('layouts.modals.modalComent')

@endsection

@section('css')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
     <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
     <link href="{{asset('css/cardSocial.css')}}" rel="stylesheet">

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js" integrity="sha512-4p9OjnfBk18Aavg91853yEZCA7ywJYcZpFt+YB+p+gLNPFIAlt2zMBGzTxREYh+sHFsttK0CTYephWaY7I3Wbw==" crossorigin="anonymous"></script>
    <script src="{{asset('js/dropzoneCustom.js')}}" ></script>
    <script src="{{asset('js/socialScrip.js')}}" ></script>

@endsection


