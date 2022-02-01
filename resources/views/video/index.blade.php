
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


@endsection

@section('css')
<link href="{{asset('css/cardSocial.css')}}" rel="stylesheet">
@endsection
