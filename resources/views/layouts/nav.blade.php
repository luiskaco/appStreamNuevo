<nav class="navbar
            navbar-expand-md
            navbar-light
            text-white">

    <div class="container">
        <a class="navbar-brand" href="#">
            {{-- {{ config('app.name', 'Stream 01') }} --}}
            <img src="{{ url('img/logoHorizontal.png') }}" alt="logo princicpal">
        </a>

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

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
                            <a class="dropdown-item"
                               href="{{ route('galeria.eventID',['4']) }}" >
                               {{ __('Líderes') }}
                            </a>

                            <a class="dropdown-item"
                                href="{{ route('galeria.eventID',['5']) }}" >
                                {{ __('División Nor Oriente CI, Norte CG, Oriente CG') }}
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('galeria.eventID',['7']) }}" >
                                {{ __('División Centro CI y CG') }}
                            </a>
                            <a class="dropdown-item"
                                 href="{{ route('galeria.eventID',['9']) }}" >
                                 {{ __('División Sur CI y CG:') }}
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('galeria.eventID',['10']) }}" >
                                {{ __('Ceas') }}
                            </a>

                        </div>
                    </li>

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
                               href="#" >

                               {{ __('Videos') }}
                            </a>
                            <a class="dropdown-item"
                                href="#" >

                                {{ __('Agenda') }}
                            </a>

                        </div>
                    </li>

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
