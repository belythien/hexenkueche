<div class="row">
    <div class="col-xl-9 col-lg-8">
        {!! isset($page) ? $page->content : ''!!}
    </div>
    <div class="col-xl-3 col-lg-4">
        @foreach($page->images as $image)
            <a href="{{ route('image.show', [$image->id]) }}">
                <img src="/storage/img/{{$image->filename}}" class="img-thumbnail mb-3" />
            </a>
        @endforeach
    </div>
</div>
