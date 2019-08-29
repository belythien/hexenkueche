@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ __('Speisekarte') }}</h1>
                    </div>

                    <div class="card-body container">
                        <div class="row">
                            @foreach($categories as $category)
                                @if($category->status == 1)
                                    @if($category->publication == '' || $category->publication <= date('Y-m-d'))
                                        @if($category->expiration == '' || $category->expiration >= date('Y-m-d'))
                                            <div class="col-md-6">
                                                <h2 class="category_name mt-2">{{ $category->name }}</h2>
                                                @if(isset($category->description))
                                                    <p>{!! $category->description !!}</p>
                                                @endif

                                                @foreach($category->menuItems as $menuItem)
                                                    <div class="mb-4">
                                                        <h3>{{ $menuItem->name }}</h3>
                                                        <p>{!! $menuItem->description !!}</p>

                                                        {{--                                                @if(sizeof($menuItem->options) > 0)--}}
                                                        {{--                                                    @foreach($menuItem->options as $option)--}}
                                                        {{--                                                        <div class="clearfix dotted_line">--}}
                                                        {{--                                                            <div class="float-left">{!! $option->name !!}</div>--}}
                                                        {{--                                                            <div class="float-right">{{ str_replace('.', ',', number_format($option->price, 2)) }}€</div>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                    @endforeach--}}
                                                        {{--                                                @else--}}
                                                        {{--                                                    <div class="clearfix dotted_line">--}}
                                                        {{--                                                        <div class="float-left">{!! $menuItem->amount !!}</div>--}}
                                                        {{--                                                        <div class="float-right">{{ str_replace('.', ',', number_format($menuItem->price, 2)) }}€</div>--}}
                                                        {{--                                                    </div>--}}
                                                        {{--                                                @endif--}}
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
                                                                        {{ str_replace('.', ',', number_format($option->price, 2)) }}€
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
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
