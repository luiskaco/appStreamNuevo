@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover " id="tableUsers">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre y Apellido</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Status</th>
                                <th scope="col">On/off</th>
                                <th scope="col">Grupo</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $vl)
                            <tr>
                                <th>{{$vl->id}}</th>
                                <td>{{$vl->name}}</td>
                                <td>{{$vl->dni}}</td>
                                <td>
                                    @if ($vl->status == 1)
                                        <span>Cuenta Activa</span>
                                    @else
                                        <span>Requiere Activación</span>
                                    @endif
                                </td>
                                <td>
                                    @if($vl->line == 1)
                                        <a href="#" title="Usuario Activo">
                                            <img src="{{asset('img/ico/iconActive.png')}}" alt="icono activo" width="16px" height="16px"/>
                                        </a>
                                    @else
                                        <a href="#" title="Usuario Inactivo">
                                            <img src="{{asset('img/ico/iconInavtive.png')}}" alt="icono inactivo" width="16px" height="16px"/>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge badge-info text-white badgeSize">{{$vl->group}}</span>
                                </td>
                                <td>{{$vl->id}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="paginationTable">
                    {{ $users->links() }}
                <div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <style>
        .paginationTable{
            display: flex;
            justify-content: center;

        }

        .badgeSize{
            font-size: 1rem;
        }

        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #000000;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #3490dc;
            border-color: #3490dc;
        }
    </style>

@endsection


@section('js')


@endsection
