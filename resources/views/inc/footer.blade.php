<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span class="text-muted">&copy; Hexenküche {{ now()->year }}</span>
            </div>
            <div class="col-md-9 text-right">
                @foreach(App\Menu::getFooterMenu()->pages as $page)
                    @if($page->isLive() == 1)
                        @if(!empty($page->external_url))
                            <a class="ml-3" href="{{ $page->external_url }}" target="_blank">{{ $page->menu_title }}</a>
                        @else
                            <a class="ml-3" href="{{ route('page', [$page->slug]) }}">{{ $page->menu_title }}</a>
                        @endif
                    @else
                        @auth
                            @if(!empty($page->external_url))
                                <a class="ml-3 footer-link-inactive" href="{{ $page->external_url }}" target="_blank"
                                >{{ $page->menu_title }}</a>
                            @else
                                <a class="ml-3 footer-link-inactive" href="{{ route('page', [$page->slug]) }}"
                                >{{ $page->menu_title }}</a>
                            @endif
                        @endauth
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</footer>
