
@extends('layouts.app')

@section('content')


 <div class="container">

        <!-- Button trigger modal -->

{{--
        <div class="containerGrid mt-4">
            @foreach ($resultImage as  $image)

                    <div class="content">
                        <img loading="lazy"
                             src="{{ Storage::url('fotos/'.$image->url) }}"
                             alt="imagen-{{$image->id}}"
                             class="sizeTemporal">
                        <div class="">
                            <input
                                type="checkbox"
                                name="like"
                                class="btnCheckLike"
                                {{getCheckLike($image->id)}}
                                data-id="{{$image->id}}">
                                <span id="count-{{$image->id}}">
                                    {{$image->like}}
                                </span> Me gusta
                        </div>

                        <span class="">{{$image->created_at->format('Y/m/d h:i')}}</span>

                        <h3>{{$image->user_link->name}}<h3>

                        <form class="form">
                            <textarea  name="desc"
                                rows="1"
                                name="comentarios"
                                required value=""
                                id="input-{{$image->id}}"
                                ></textarea>
                            <p class="error-{{$image->id}} errorInput">No puede quedar vacio</p>

                            <button type="submit"
                                    class="btn btn-primary btnClickComment"
                                    data-id="{{$image->id}}">
                                ADD
                            </button>
                        </form>
                        <div>
                            <a class="linkComentario btnSearchComment"
                                data-toggle="modal"
                                data-target="#commentId"
                                data-id="{{$image->id}}">
                                Ver los
                                <span id="countComentaryID-{{$image->id}}">{{getCountComent($image->id)}}
                                </span> comentarios
                            </a>
                        </div>

                    </div>
            @endforeach
        </div> --}}

  <div>

    <div class="container mt-4">
        <div class="row justify-content-center flex-column text-center headingSocial">
            <h3>Galería</h3>
            <p>Sube tu fotografía y cuéntanos cuál es tu sueño o meta para la Travesía 2022</p>

            <button type="button" class="btn btn-yellow" data-toggle="modal"
            data-target="#upload_id">
                Sube tu foto Aquí
            </button>
        </div>
    </div>


    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="instagram-card">
                    <div class="instagram-card-header">
                        <span class="instagram-card-user-name">Hola mund</span>
                    </div>
                    <div class="instagram-card-image">
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
                            </a><span id="count-"></span> Me gusta</p>

                        <a class="linkComentario btnSearchComment">
                                <img src="{{'/img/enviar.png'}}" alt="imagen-" />
                            </a>
                    </div>
                </div><!--end item card-->
            </div><!-- end col-md- 6-->
        </div><!--- end row -->

    </div>

    <div class="container m-4">
        <hr>
    <div>


  <div class="container mt-4">
    <div class="container-cards">

        @foreach ($resultImage as  $image)
            <div class="instagram-card">
                <div class="instagram-card-header">
                    <span class="instagram-card-user-name">{{$image->user_link->name}} </span>
                </div>
                <div class="instagram-card-image">
                    <img src="{{ Storage::url('fotos/'.$image->url) }}" alt="imagen-{{$image->id}}"/>
                    <div class="instagram-card-content">
                    <p class="card-description">{{getFirstComentary($image->id)}}</p>
                    </div>
                </div>
                <div class="instagram-card-footer">
                    <p class="likes" id = heart>
                        <a class="action-icon-liked btnCheckLike" data-id="{{$image->id}}">
                            <i class="fa {{getCheckLike($image->id)}}">
                             </i>
                        </a><span id="count-{{$image->id}}">{{$image->like}}</span> Me gusta</p>

                    <a class="linkComentario btnSearchComment"
                    data-toggle="modal"
                    data-target="#commentId"
                    data-id="{{$image->id}}">
                            <img src="{{'/img/enviar.png'}}" alt="imagen-{{$image->id}}" />
                     </a>
                </div>
            </div>
        @endforeach

    </div><!--end card -->-->
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

@endsection


