
@extends('layouts.app')

@section('content')

<div class="container container-custom-eventos">
    <div class="container ">
        <div class="row justify-content-center flex-column text-center headingSocial">
            <h3>Videos</h3>


        </div>
    </div>


<div class="container mt-4">
<hr>
<div>
    <div class="container mt-4">
        <div class="container-cards">
            <div class="instagram-card">
                <div class="instagram-card-header">
                    <span class="instagram-card-user-name">Video 1</span>
                </div> <div class="instagram-card-image">
                    <iframe width="330" height="215" src="https://www.youtube.com/embed/heDapKxMr7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen">

                    </iframe>
                    <div class="instagram-card-content">
                        <p class="card-description"></p>
                    </div>
                </div>
                <div class="instagram-card-footer">

                </div>
            </div>
            <div class="instagram-card">
                <div class="instagram-card-header">
                    <span class="instagram-card-user-name">Video 1</span>
                </div> <div class="instagram-card-image">
                    <iframe width="330" height="215" src="https://www.youtube.com/embed/heDapKxMr7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen">

                    </iframe>
                    <div class="instagram-card-content">
                        <p class="card-description"></p>
                    </div>
                </div>
                <div class="instagram-card-footer">

                </div>
            </div>

        </div>
    </div>
</div>

<div class="space-10">
</div>
@endsection

@section('css')
<link href="{{asset('css/cardSocial.css')}}" rel="stylesheet">

<style>
    /*VIDEO STILOS*/
.container-custom-eventos{
    padding-top: 30px !important;
}

.instagram-card-image iframe{
    width: 100%;
    height: auto;

}

@media(min-width:768px){
    .instagram-card-image iframe{
      height: 300px;
    }
}

hr {
border-bottom: 0px !important;
}

.container-cards {
grid-template-columns: repeat(2, 1fr) !important;
}

.instagram-card-image:after {
position: unset !important;
}

.btn:focus {
box-shadow: unset !important;
}

@media screen and (max-width:1024px){

    .container{
            padding: 0 !important;
            margin: 0;
        }

    .container-custom-eventos{
        padding: 30px 0 60px !important;
    }

    /* NO BORRAR ES UNA EXCEPCION PARA QUE PUEDA FUNCIONAR EN ESTA PESTAÑA */
            footer, .container-footer{
            position: unset !important;
        }
}

@media screen and (max-width:768px){

    .container-cards {
        grid-template-columns: repeat(2, 1fr) !important;
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
        grid-template-columns: repeat(1, 1fr) !important;
    }

}

</style>

@endsection
