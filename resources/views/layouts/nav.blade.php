<nav class="navbar
            navbar-expand-md
            navbar-light
            text-white">

    <div class="container">
        <a class="navbar-brand" href="#">
            {{-- {{ config('app.name', 'Stream 01') }} --}}
            <img src="{{ url('img/logoHorizontal.png') }}" alt="logo princicpal">
        </a>

        <button id="menuToggle" class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('evento/home')) ? 'actived' : '' }}" href="{{ route('home') }}">
                            {{ __('Evento') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#" data-toggle="modal" data-target="#modalAgenda">
                            {{ __('Agenda') }}
                            <!-- todo: popup -->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('video.index')}}">
                            {{ __('Video') }}
                            <!-- todo: popup -->
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            Galería
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown">

                            @if (Carbon\carbon::now()->format('Y-m-d') >= "2022-02-04" || Auth::user()->role == 'admin' || Auth::user()->group == 4)

                                <a class="dropdown-item"
                                    href="{{ route('galeria.eventID',['4']) }}" >
                                    {{ __('Líderes de agencias y CEAS') }}
                                </a>

                            @endif

                            @if (Carbon\carbon::now()->format('Y-m-d') >= "2022-02-05" || Auth::user()->role == 'admin' || Auth::user()->group == 5)

                                <a class="dropdown-item"
                                    href="{{ route('galeria.eventID',['5']) }}" >
                                    {{ __('División Centro CI , División Oriente CG') }}
                                </a>

                            @endif


                            @if (Carbon\carbon::now()->format('Y-m-d') >= "2022-02-07" || Auth::user()->role == 'admin' || Auth::user()->group == 7)

                                <a class="dropdown-item"
                                    href="{{ route('galeria.eventID',['7']) }}" >
                                    {{ __('Division Nor-Oriente CI , División Norte CG') }}
                                </a>

                            @endif


                            @if (Carbon\carbon::now()->format('Y-m-d') >= "2022-02-09" || Auth::user()->role == 'admin' || Auth::user()->group == 9)

                                <a class="dropdown-item"
                                    href="{{ route('galeria.eventID',['9']) }}" >
                                    {{ __('Division Sur CI , División sur CG') }}
                                </a>

                            @endif

                            @if (Carbon\carbon::now()->format('Y-m-d') >= "2022-02-10" || Auth::user()->role == 'admin' || Auth::user()->group == 10)

                                <a class="dropdown-item"
                                    href="{{ route('galeria.eventID',['10']) }}" >
                                    {{ __('Ceas') }}
                                </a>

                            @endif
                        </div>
                    </li>

                    @if(Auth::user()->role === 'admin')

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('Administrador') }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="{{route('admin.index')}}" >

                               {{ __('Usuarios') }}
                            </a>
                            <a class="dropdown-item"
                               href="{{route('admin.listImage')}}" >

                               {{ __('Imagen') }}
                            </a>
                            <a class="dropdown-item"
                               href="{{route('admin.uploadVideo')}}" >

                               {{ __('Videos -dev') }}
                            </a>
                           

                        </div>

                    </li>
                    @endif

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                            >

                               {{ __('Cerrar') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

            </ul>
        </div>
    </div>
</nav>
