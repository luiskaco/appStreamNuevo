
@extends('layouts.app')

@section('content')

    <div class="container">
        <br><br><br>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center flex-column text-center headingSocial">
            <h3>Videos</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic illo possimus porro error pariatur perspiciatis ut nam expedita blanditiis temporibus libero provident sapiente, non enim dignissimos ab aspernatur sunt voluptates.</p>
        </div>
    </div>
    <div class="container">
        <br><br>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="instagram-card">
                    <div class="instagram-card-header">
                        <span class="instagram-card-user-name">Video 1</span>
                    </div>
                    <div class="instagram-card-image">
                        <iframe width="330" height="215"
                        src="https://www.youtube.com/embed/heDapKxMr7s"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                        <div class="instagram-card-content">
                        <p class="card-description"></p>
                        </div>
                    </div>
                    <div class="instagram-card-footer">

                    </div>
                </div><!--end item card-->
            </div><!-- end col-md- 4-->

            <div class="col-md-4 col-sm-12">
                <div class="instagram-card">
                    <div class="instagram-card-header">
                        <span class="instagram-card-user-name">Video 1</span>
                    </div>
                    <div class="instagram-card-image">
                        <iframe width="330" height="215"
                        src="https://www.youtube.com/embed/heDapKxMr7s"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                        <div class="instagram-card-content">
                        <p class="card-description"></p>
                        </div>
                    </div>
                    <div class="instagram-card-footer">

                    </div>
                </div><!--end item card-->
            </div><!-- end col-md- 4-->

            <div class="col-md-4 col-sm-12">
                <div class="instagram-card">
                    <div class="instagram-card-header">
                        <span class="instagram-card-user-name">Video 1</span>
                    </div>
                    <div class="instagram-card-image">
                        <iframe width="330" height="215"
                        src="https://www.youtube.com/embed/heDapKxMr7s"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>

                        <div class="instagram-card-content">
                        <p class="card-description"></p>
                        </div>
                    </div>
                    <div class="instagram-card-footer">

                    </div>
                </div><!--end item card-->
            </div><!-- end col-md- 4-->
        </div><!-- end row -->



    </div>
@endsection

@section('css')
<link href="{{asset('css/cardSocial.css')}}" rel="stylesheet">
@endsection
