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
                        <a class="nav-link"  href="#" data-toggle="modal" data-target="#modalSubeTuFoto">
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
                               {{ __('Grupo 01') }}
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('galeria.eventID',['5']) }}" >
                                {{ __('Grupo 02') }}
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('galeria.eventID',['7']) }}" >
                                {{ __('Grupo 03') }}
                            </a>
                            <a class="dropdown-item"
                                 href="{{ route('galeria.eventID',['9']) }}" >
                                 {{ __('Grupo 04') }}
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('galeria.eventID',['10']) }}" >
                                {{ __('Grupo 05') }}
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.index')}}">
                            {{ __('Administrador') }}
                            <!-- todo: popup -->
                        </a>
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
