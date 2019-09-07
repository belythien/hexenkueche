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

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @include('inc.messages')
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</div>
@include('inc.footer')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('text-ckeditor', {
  filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
  filebrowserUploadMethod: 'form',
  on: {
    instanceReady: function() {
      this.dataProcessor.htmlFilter.addRules( {
        elements: {
          img: function( el ) {
            el.addClass( 'img-thumbnail' );
          }
        }
      } );
    }
  }
})
</script>
</body>
</html>
