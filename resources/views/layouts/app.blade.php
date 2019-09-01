<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('inc.navbar')

    <main class="app_main py-4">

        @if(isset($hotbox) && $hotbox->status == 1 && trim($hotbox->text) > '')
            <div class="hotbox d-none d-md-block">
                <a href="{{ route('page', [$hotbox->url]) }}">{!! $hotbox->text !!}</a>
            </div>
        @endif

		@auth
			@if( $page->status != 1 )
			<div class="page_inactive_box">
				{{ __('inaktiv') }}
			</div>
			@endif
		
			<div class="edit_page_box">
				<a href="{{ route('page.edit', [$page->id]) }}">{{ __('Bearbeiten') }} <i class="fas fa-edit"></i></a>
			</div>
		@endauth

        @yield('content')
    </main>

</div>
@include('inc.footer')
</body>
</html>
