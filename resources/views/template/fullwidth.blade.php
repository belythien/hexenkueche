<div class="row mb-3">
    <div class="col-12">
        {!! isset($page) ? $page->content : ''!!}
    </div>
</div>
<div class="row mb-3">
    @if(sizeof($page->images) == 1)
        @include('gallery.01')
    @elseif(sizeof($page->images) == 2)
        @include('gallery.02')
    @elseif(sizeof($page->images) == 3)
        @include('gallery.03')
    @elseif(sizeof($page->images) == 4)
        @include('gallery.04')
    @elseif(sizeof($page->images) == 5)
        @include('gallery.05')
    @else
        @include('gallery.default')
    @endif
</div>
