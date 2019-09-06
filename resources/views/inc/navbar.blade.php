<nav id="navigation" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('page', ['home']) }}">
            <img src="{{ asset('img/hexenkueche_logo2.png') }}" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @if(isset($menus[1]))
                    @foreach($menus[1]->pages as $page)
                        @if($page->isLive() == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('page', [$page->slug]) }}"
                                >{{ $page->menu_title }}</a>
                            </li>
                        @else
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link nav-link-inactive" href="{{ route('page', [$page->slug]) }}"
                                    >{{ $page->menu_title }}</a>
                                </li>
                            @endauth
                        @endif
                    @endforeach
                @endif
            <!-- Authentication Links -->

                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                        >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('menuitem.index')}}" class="d-block"
                            ><i class="fas fa-utensils"></i> {{ __('Speisekarte') }}</a>

                            <a class="dropdown-item" href="{{ route('page.index') }}" class="d-block"
                            ><i class="fas fa-file-alt"></i> {{ __('Seiten') }}</a>

                            <a class="dropdown-item" href="{{ route('image.index') }}" class="d-block"
                            ><i class="fas fa-images"></i> {{ __('Bilder') }}</a>

                            <a class="dropdown-item" href="{{ route('hotbox.index') }}" class="d-block"
                            ><i class="fas fa-certificate"></i> {{ __('Hotboxes') }}</a>

                            <a class="dropdown-item" href="{{ route('menu.index') }}" class="d-block"
                            ><i class="fas fa-compass"></i> {{ __('Navi-Leisten') }}</a>


                            <hr>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
