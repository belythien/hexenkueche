<footer class="footer bg-dark">
    <div class="container">
        <span class="text-muted">&copy; Hexenküche {{ now()->year }}</span>
        <div class="float-right">
			@foreach($footer_menu->pages as $page)
				<a class="ml-3" href="{{ route('page', [$page->slug]) }}">{{ $page->menu_title }}</a>
			@endforeach
        </div>
    </div>
</footer>
