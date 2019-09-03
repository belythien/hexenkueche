@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if(isset($page) && $page->title > '')
                            <h1>{{ $page->title }}</h1>
                        @else
                            <h1>{{ __('Speisekarte') }}</h1>
                        @endif
                    </div>

                    <div class="card-body container">
                        @if(isset($page) && $page->content > '')
                            <div class="row">
                                {!! $page->content !!}
                            </div>
                            <hr>
                        @endif
                        <div class="row">
                            @foreach($categories as $category)
                                @if($category->isLive() == 1)
                                    <div class="col-md-6">
                                        <h2 class="category_name mt-2">{{ $category->name }}</h2>
                                        @if(isset($category->description))
                                            <p>{!! $category->description !!}</p>
                                        @endif

                                        @foreach($category->menuItems as $menuItem)
                                            <div class="mb-4">
                                                <h3>{{ $menuItem->name }}@foreach($menuItem->allergens as $allergen)<sup
                                                        class="allergen" title="{{$allergen->name}}"
                                                    >{{ $allergen->id }}</sup>@endforeach</h3>
                                                <p>{!! $menuItem->description !!}</p>
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

                                                @if( $menuItem->image )
                                                    <img
                                                        src="{{ asset('storage/images/' . $menuItem->image ) }}"
                                                        alt="" class="img-thumbnail my-2"
                                                    />
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <h5 id="allergens">{{ __('Allergene') }}</h5>
                    <div class="row">
                    @foreach($allergens as $allergen)
                        <div class="col-lg-2 col-md-3 col-sm-6">{{ $allergen->id }}) {{ $allergen->name }}</div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
