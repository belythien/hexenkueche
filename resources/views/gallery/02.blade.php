@foreach($page->images as $image)
    <div class="col-lg-6">
        <a href="{{ route('image.show', [$image->id]) }}">
            <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3"
                 title="{{ $image->name  }}"
            />
        </a>
    </div>
@endforeach
