<div class="col-md-6">
    <h2 class="category_name mt-2">
        @auth
            <a href="{{ route('category.edit', [ $category->id ]) }}"
               class="btn btn-success btn-sm mr-1"
            ><i class="fas fa-edit"></i></a>
        @endauth
        {{ $category->name }}
    </h2>
    @if(isset($category->description))
        <p>{!! $category->description !!}</p>
    @endif

    @foreach($category->menuItems as $menuItem)
        @if($menuItem->isLive())
            <div class="mb-4">
                <h3>
                    @auth
                        <a href="{{ route('menuitem.edit', [ $menuItem->id ]) }}"
                           class="btn btn-danger btn-sm mr-1"
                        ><i class="fas fa-edit"></i></a>
                    @endauth
                    {{ $menuItem->name }}@foreach($menuItem->allergens as $allergen)
                        <sup
                            class="allergen" title="{{$allergen->name}}"
                        >{{ $allergen->id }}</sup>@endforeach
                </h3>
                <p class="menu_item_description">
                    @if($menuItem->status == 2)
                        <span class="menu_item_not_available">{{ __('Zur Zeit leider nicht erhältlich') }}</span>
                    @endif
                    {!! $menuItem->description !!}
                </p>
                @foreach($menuItem->options as $option)
                    <div class="container">
                        <div class="row dotted_line">
                            <div class="col-xl-8 col-lg-6">
                                {!! $option->name !!}
                            </div>
                            <div class="col-xl-2 col-lg-3 text-right">
                                {{ $option->amount }}
                            </div>
                            <div class="col-xl-2 col-lg-3 text-right">
                                {{ str_replace('.', ',', number_format($option->price, 2)) }}
                                €
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach( $menuItem->images as $image )
                    <a href="{{ route('image.show', [$image->id]) }}">
                        <img
                            src="{{ asset('storage/img/' . $image->filename ) }}"
                            alt="" class="img-thumbnail my-2"
                            title="{{ $image->name  }}"
                        />
                    </a>
                @endforeach
            </div>
        @endif
    @endforeach
</div>
