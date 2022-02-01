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
                    </div>
                    <div class="col-lg-12 col-12 col-md-12 col-sm-12 container-video">

                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HTdd8QxifbY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-5 col-sm-5 d-flex align-items-center justify-content-center">
                    <div class="container-chat-video">
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


