<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @if(isset($page) && $page->menu_title > '') » {{ $page->menu_title }}@endif</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('inc.navbar')

    <main class="app_main py-4">

        @if(isset($hotbox) && $hotbox->status == 1 && trim($hotbox->text) > '')
            <div class="hotbox d-none d-md-block">
                @if(!empty($hotbox->url))
                    <a href="{{ route('page', [$hotbox->url]) }}">{!! $hotbox->text !!}</a>
                @else
                    {!! $hotbox->text !!}
                @endif
            </div>
        @endif

        @auth
            @if(isset($page))
                @if( $page->isLive() != 1 )
                    <div class="page_inactive_box">
                        {{ __('inaktiv') }}
                        @if(isset($page->publication))
                            <br>Sichtbar ab: {{ date('d.m.Y', strtotime($page->publication)) }}
                        @endif
                        @if(isset($page->expiration))
                            <br>Sichtbar bis: {{ date('d.m.Y', strtotime($page->expiration)) }}
                        @endif
                    </div>
                @endif
            @endif
        @endauth

        @yield('content')
    </main>

</div>
@include('inc.footer')
</body>
</html>
