@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body container">
                        @if(isset($page) && $page->content > '')
                            <div class="row">
                                <div class="col-12 text-center">
                                    {!! $page->content !!}
                                </div>
                            </div>
                        @endif
                        <div class="row d-flex justify-content-around">
                            @foreach($keywords as $keyword)
                                <a href="{{route('roulette', ['keyword' => $keyword])}}" class="btn btn-danger btn-lg"
                                >{{$keyword->name}}</a>
                            @endforeach
                        </div>

                        <div class="mt-5">
                            <h3>
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

                            @foreach( $menuItem->images as $image )
                                <a href="{{ route('image.show', [$image->id]) }}">
                                    <img
                                        src="{{ asset('storage/img/' . $image->filename ) }}"
                                        alt="" class="img-thumbnail my-2"
                                        title="{{ $image->name  }}"
                                    />
                                </a>
                            @endforeach

                            <hr class="mt-5">
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
        </div>
    </div>
@endsection
