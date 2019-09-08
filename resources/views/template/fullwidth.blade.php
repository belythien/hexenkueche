<div class="row mb-3">
    <div class="col-12">
        {!! isset($page) ? $page->content : ''!!}
    </div>
</div>
<div class="row mb-3">
    @if(sizeof($page->images) == 1)
        @foreach($page->images as $image)
            <div class="col-12">
                <a href="{{ route('image.show', [$image->id]) }}">
                    <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3"
                         title="{{ $image->name  }}"
                    />
                </a>
            </div>
        @endforeach
    @elseif(sizeof($page->images) == 2)
        @foreach($page->images as $image)
            <div class="col-lg-6">
                <a href="{{ route('image.show', [$image->id]) }}">
                    <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3"
                         title="{{ $image->name  }}"
                    />
                </a>
            </div>
        @endforeach
    @elseif(sizeof($page->images) == 4)
        <div class="col-lg-4">
            <a href="{{ route('image.show', [$page->images[0]->id]) }}">
                <img src="{{ asset('/storage/img/' . $page->images[0]->filename ) }}" class="img-thumbnail mb-3"
                     title="{{ $page->images[0]->name  }}"
                />
            </a>
        </div>
        <div class="col-lg-4">
            <a href="{{ route('image.show', [$page->images[1]->id]) }}">
                <img src="{{ asset('/storage/img/' . $page->images[1]->filename ) }}" class="img-thumbnail mb-3"
                     title="{{ $page->images[1]->name  }}"
                />
            </a>
        </div>
        <div class="col-lg-4">
            <a href="{{ route('image.show', [$page->images[2]->id]) }}">
                <img src="{{ asset('/storage/img/' . $page->images[2]->filename ) }}" class="img-thumbnail mb-3"
                     title="{{ $page->images[2]->name  }}"
                />
            </a>
        </div>
        <div class="col-lg-12">
            <a href="{{ route('image.show', [$page->images[3]->id]) }}">
                <img src="{{ asset('/storage/img/' . $page->images[3]->filename ) }}" class="img-thumbnail mb-3"
                     title="{{ $page->images[3]->name  }}"
                />
            </a>
        </div>
    @else
        @foreach($page->images as $image)
            <div class="col-xl-4 col-lg-6">
                <a href="{{ route('image.show', [$image->id]) }}">
                    <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3"
                         title="{{ $image->name  }}"
                    />
                </a>
            </div>
        @endforeach
    @endif
</div>
