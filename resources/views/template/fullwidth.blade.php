<div class="row mb-3">
    <div class="col-12">
        {!! isset($page) ? $page->content : ''!!}
    </div>
</div>
<div class="row mb-3">
    @if(sizeof($page->images) == 1)
        @foreach($page->images as $image)
            <div class="col-12">
                <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3" />
            </div>
        @endforeach
    @elseif(sizeof($page->images) == 2)
        @foreach($page->images as $image)
            <div class="col-lg-6">
                <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3" />
            </div>
        @endforeach
    @else
        @foreach($page->images as $image)
            <div class="col-xl-4 col-lg-6">
                <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3" />
            </div>
        @endforeach
    @endif
</div>
