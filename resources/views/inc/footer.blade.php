<footer class="footer bg-dark">
    <div class="container">
        <span class="text-muted">&copy; Hexenküche {{ now()->year }}</span>
        <div class="float-right">
            <a href="{{ route('page', ['kontakt']) }}">{{ __('Kontakt') }}</a>
            <span class="divider">•</span>
            <a href="{{ route('page', ['datenschutz']) }}">{{ __('Datenschutz') }}</a>
            <span class="divider">•</span>
            <a href="{{ route('page', ['impressum']) }}">{{ __('Impressum') }}</a>
        </div>

    </div>
</footer>
