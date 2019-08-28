<nav id="navigation" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{ asset('storage/img/hexenkueche_logo2.png') }}" height="80"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">                  
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu') }}">{{ __('Speisekarte') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('location') }}">{{ __('Anfahrt') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('location') }}">{{ __('Catering') }}</a>
                        </li>
                        <!-- Authentication Links -->
                        
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('menuitem.index')}}" class="d-block">{{ __('Speisekarte bearbeiten') }}</a>
                                
                                    <a class="dropdown-item" href="#" class="d-block">{{ __('Seiten') }}</a>
                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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