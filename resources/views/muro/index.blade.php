
@extends('layouts.app')

@section('content')


 <div class="container">
        <h3> MURO </h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal"
        data-target="#upload_id">
            Subir tu foto Aquí
        </button>
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
                    <p class="likes" id = heart><a class="action-icon-liked" ><i class="fa fa-heart-o"></i></a>18.068 Me gusta</p>
                    {{-- <button type="button" class="btn btn-comment " data-toggle="modal" data-target="#modalAddComment"> Añadir comentario </button> --}}
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


    <style>


        .instagram-card{
             background: #ffffff;
            border: 1px solid #f2f2f2;
            border-radius: 8px;
            max-width: 100%;
            /* max-width: 300px; */
            height: fit-content;
            padding: 0px 10px;
        }

        .instagram-card-header{
            display: flex;
            align-items: center;
            height: 35px;
        }

        .instagram-card-user-image{
            border-radius: 50%;
            width: 40px;
            height: 40px;
            vertical-align: middle;
        }

        .instagram-card-time{
            float: right;
            width: 80px;
            padding-top:10px;
            text-align: right;
            color: #999;
        }

        .instagram-card-user-name{
            font-weight:bold;
            color: #e40571;
            padding-bottom: 3px;
        }

        .instagram-card-content{
            padding: 20px 20px 5px;
            position: absolute;
            width: 100%;
            color: white;
            bottom: 0;
            box-sizing: border-box;
        }

        .likes{
            font-weight: bold;
            margin: 0;
        }

        .instagram-card-content-user{
            font-weight: bold;
            color: #262626;
        }

        .hashtag{
             color: #003569;
        }

        .comments{
            color:#999;
            margin: 10px 0 5px;
        }

        .user-comment{
            color: #003569;
        }

        .instagram-card-image{
            position: relative;
        }

        .instagram-card-footer{
            padding: 15px 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: .7rem;
        }

        @media(min-width:768px){
            .instagram-card-footer{
                font-size: 1rem;
            }
        }

        hr{
            border: none;
            border-bottom: 1px solid #ccc;
            margin-top: 30px;
            margin-bottom: 0px;

        }

        .action-icon-liked {
            font-size: 16px;
            color: #ccc;
            padding-right: 6px;
        }

        .comments-input{
            border: none;
            margin-right: 10px;
            width: 100%;
            background: #f5f5f5;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .comment a, .comment p{
             font-size: 14px;
        }

        .fa-heart-o {
            color: red;
            cursor: pointer;
        }

        .fa-heart {
            color: red;
            cursor: pointer;
        }

        .container-cards{
            display: grid;
            grid-template-columns: repeat(1, 1fr) ;
            grid-gap: 25px;
        }

            @media(min-width:768px){
                .container-cards{
                    grid-template-columns: repeat(2, 1fr) ;
                }
            }

        .instagram-card-image img{
            width: 100% !important;
            object-fit: cover;
            max-height: 250px;
        }

        .comment{
            display: flex;
                align-items: start;
            }

        .comment p{
            padding-left: 10px;
            margin: 0 0 10px 0;
        }

        .btn-comment{
            background: #E40571;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: .9rem;
            color: white;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        .card-description{
            margin: 5px 0;
        }

    </style>



    <style>
        .containerGrid{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .content{
            display: flex;
            flex-direction: column;
        }

        .content h3 {
            color: #fff;
            font-size:1rem;
        }

        .content span{
            color: #fff;
        }

        .sizeTemporal{
            width: 100%;
            height: 200px;;
            max-width: 100%;
        }

        a.linkComentario{
            color:#ffF;
            font-size: 1.5rem;
            text-decoration: none;
        }

       a.linkComentario:hover{
            color:aquamarine
        }

        .errorInput{
            display: none;
        }

        .comment_Content{
            display: flex;
            flex-direction: column;
            gap:3rem;

        }

        .comment_head{
            background-color:#e5e5e5;
        }

        .comment_body{
            background-color:#f8f8f8;
         }

    </style>

@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js" integrity="sha512-4p9OjnfBk18Aavg91853yEZCA7ywJYcZpFt+YB+p+gLNPFIAlt2zMBGzTxREYh+sHFsttK0CTYephWaY7I3Wbw==" crossorigin="anonymous"></script>

    <script src="{{asset('js/dropzoneCustom.js')}}" ></script>
    {{-- @include('muro.partials.codigo') --}}

@endsection


