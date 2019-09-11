<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            background: #fff;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
            padding: 3em;
            position: relative;
        }

        .title img {
            max-width: 100%;
            margin-bottom: 1em;
        }

        .links > a {
            color: #e2023e;
            padding: 0 25px;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a.welcome-inactive-link {
            color: #999;
        }

        .m-b-md {
            /*margin-bottom: 30px;*/
        }
    </style>
</head>
<body>
<div class="bg1"></div>
<div class="bg2"></div>
<div class="welcome flex-center position-ref full-height">
    <div class="content">

        <div class="title m-b-md">
            <a href="{{ route('page', ['home']) }}"><img src="{{ asset('img/hexenkueche_logo2.png') }}" width="500"
                /></a>

            <div
                class="links {{ isset($hotbox) && $hotbox->status == 1 && trim($hotbox->text) > '' ? 'with-hotbox' : '' }}"
            >
                @if(isset($menus[0]))
                    @foreach($menus[0]->pages as $page)
                        @if($page->isLive() == 1)
                            @if(!empty($page->external_url))
                                <a href="{{ $page->external_url }}" target="_blank">{{ $page->menu_title }}</a>
                            @else
                                <a href="{{ route('page', [$page->slug]) }}">{{ $page->menu_title }}</a>
                            @endif
                        @else
                            @auth
                                @if(!empty($page->external_url))
                                    <a class="welcome-inactive-link" href="{{ $page->external_url }}" target="_blank"
                                    >{{ $page->menu_title }}</a>
                                @else
                                    <a class="welcome-inactive-link" href="{{ route('page', [$page->slug]) }}"
                                    >{{ $page->menu_title }}</a>
                                @endif
                            @endauth
                        @endif
                    @endforeach
                @endif
            </div>
            @if(isset($hotbox) && $hotbox->status == 1 && trim($hotbox->text) > '')
                <div class="hotbox">
                    @if(!empty($hotbox->url))
                        <a href="{{ route('page', [$hotbox->url]) }}">{!! $hotbox->text !!}</a>
                    @else
                        {!! $hotbox->text !!}
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
