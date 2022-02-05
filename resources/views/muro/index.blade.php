
@extends('layouts.app')

@section('content')

<div class="container container-custom-eventos">
    <div class="container">

            <input type="hidden" name="grupoID" value="{{$id}}" id="groupID"/>

            <div class="container">
                <div class="row justify-content-center flex-column text-center headingSocial">
                    <h3>Galería</h3>
                    <p>Sube tu fotografía y cuéntanos cuál es tu sueño o meta para la Travesía 2022</p>
                    <div class="containerBtn">
                        @include('layouts.partials.button-popup-add-photo')
                    </div>
                </div>
            </div>
    </div>



    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="instagram-card">
                    <div class="instagram-card-header">
                        <span class="instagram-card-user-name">Lorem ipsum </span>
                    </div>
                    <div class="instagram-card-image">
                        <img src="{{Storage::url('fotos/1643844964.jpg')}}" alt="imagen-" style="max-height:470px;"/>
                        <div class="instagram-card-content">
                             <p class="card-description">
                                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed commodi deleniti consequatur, facilis eos praesentium accusantium doloremque ducimus optio magnam repellendus voluptatem rerum nostrum at sit, eveniet veniam eius cupiditate.
                             </p>
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

</div>

@include('layouts.modals.modalUpload')
@include('layouts.modals.modalComent')

@endsection

@section('css')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
     <link href="{{asset('css/cardSocial.css')}}" rel="stylesheet">
     <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">



<style>


    /* NO BORRAR ES UNA EXCEPCION PARA QUE PUEDA FUNCIONAR EN ESTA PESTAÑA */
        footer, .container-footer{
            position: unset !important;
        }

        .container-custom-eventos{
            padding-top: 30px !important;
        }

        @media screen and (max-width:1024px){

            .container{
                    padding: 0 !important;
                    margin: 0;
            }

            .container-custom-eventos {
                padding: 30px 0 60px !important;
                margin: auto;
            }

            .container-custom-eventos{
                padding-top: 30px !important;
            }
        }



        @media screen and (max-width:550px){
            .container-custom-eventos{
                padding: 30px 15px 15px !important;
            }

            .headingSocial{
                margin: auto !important;
            }

            .headingSocial p {
                font-size: .9rem !important;
            }

            .container-cards {
                padding: 0 15px !important;
            }

        }
    </style>

@endsection

@section('js')



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js" integrity="sha512-4p9OjnfBk18Aavg91853yEZCA7ywJYcZpFt+YB+p+gLNPFIAlt2zMBGzTxREYh+sHFsttK0CTYephWaY7I3Wbw==" crossorigin="anonymous"></script>
    <script src="{{asset('js/socialScrip.js')}}" ></script>
    <script src="{{asset('js/dropzoneCustom.js')}}" ></script>

@endsection

