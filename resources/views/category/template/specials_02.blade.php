<div class="col-12 specials mb-4">
    <h2 class="category_name mt-4" id="category_{{$category->id}}">
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
    <div class="row">
        @foreach($category->menuItems as $menuItem)
            @if($menuItem->isLive())
                <div class="mb-4 col-md-6">
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
                        @include('category.inc.availability_info')
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
                </div>
            @endif
        @endforeach
    </div>
    <div class="row mb-4">
        @foreach($category->menuItems as $menuItem)
            @foreach( $menuItem->images as $image )
                <div class="col-md-3">
                    <a href="{{ route('image.show', [$image->id]) }}">
                        <img
                            src="{{ asset('storage/img/' . $image->filename ) }}"
                            alt="" class="img-thumbnail my-2"
                            title="{{ $image->name  }}"
                        />
                    </a>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
