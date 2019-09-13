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
<div class="col-lg-6">
    <a href="{{ route('image.show', [$page->images[3]->id]) }}">
        <img src="{{ asset('/storage/img/' . $page->images[3]->filename ) }}" class="img-thumbnail mb-3"
             title="{{ $page->images[3]->name  }}"
        />
    </a>
</div>
<div class="col-lg-6">
    <a href="{{ route('image.show', [$page->images[4]->id]) }}">
        <img src="{{ asset('/storage/img/' . $page->images[4]->filename ) }}" class="img-thumbnail mb-3"
             title="{{ $page->images[4]->name  }}"
        />
    </a>
</div>

