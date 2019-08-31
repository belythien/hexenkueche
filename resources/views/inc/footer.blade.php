<footer class="footer bg-dark">
    <div class="container">
        <span class="text-muted">&copy; Hexenküche {{ now()->year }}</span>
        <div class="float-right">
            @if(isset($menus[2]))
                @foreach($menus[2]->pages as $page)
                    <a class="ml-3" href="{{ route('page', [$page->slug]) }}">{{ $page->menu_title }}</a>
                @endforeach
            @endif
        </div>
    </div>
</footer>
