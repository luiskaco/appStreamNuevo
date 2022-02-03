@extends('layouts.app')

@section('content')

<input type="hidden" value="{{route('admin.listImageAjax')}}" id="getPathTableImage"/>
<input type="hidden" value="{{route('admin.deleListImageAjax')}}" id="getPathDelete"/>

<div class="container mt-4" >

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="container">
                    <div class="row justify-content-center mt-4 mb-4">
                        <h3>Listado de Imagen Subidas</h3>
                    </div>
                </div>
                <div class="container mt-4  mb-4">
                    <div class="table-responsive" >
                        <table id="tableImage" class="display"  class="table table-bordered table-hover table-div" style="width: 100%;" >
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th>Dni</th>
                                    <th>Agencia</th>
                                    <th>Grupo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>


            </div>
        </div>


    </div>

    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>

@endsection


@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>

<style>

    /* head*/
    .headingUser{
        font-size:1.4rem;
    }

    /*en line*/
    .containerLine {
        text-align: center;
    }

    .containerLine h3{
        font-size: 1.6rem;
        font-weight: 600;
    }

    .containerLine p {
        margin:0;
        padding:0;
        font-size: 1.4rem;
    }

    /*table*/
    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #C9005C;
        background-color: #fff;
        border: unset;
            border-top-color: rgb(222, 226, 230);
            border-right-color: rgb(222, 226, 230);
            border-bottom-color: rgb(222, 226, 230);
            border-left-color: rgb(222, 226, 230);
        }

        .page-link:hover{
            color:#C9005C;
        }

    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #C9005C;
        border-color: #C9005C;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        box-sizing: border-box;
        display: inline-block;
        min-width: 1.5em;
        padding: 0;
        margin-left: 2px;
        text-align: center;
        text-decoration: none !important;
        cursor: pointer;
        *cursor: hand;
        color: #333 !important;
        border: 1px solid transparent;
        border-radius: 2px;
    }


    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: white !important;
        border: 1px solid #fff;
        /* background-color: #585858; */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));

        background: unset;
        }
</style>


@endsection
