@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(isset($page) && $page->title > '')
                        <div class="card-header">
                            <h1>{{ $page->title }}
                                @auth
                                    <a href="{{ route('page.edit', [ $page->id ]) }}"
                                       class="btn btn-danger float-right ml-3"
                                    ><i class="fas fa-edit"></i> {{ __('Text bearbeiten') }}</a>
                                @endauth
                            </h1>
                        </div>
                    @endif

                    <div class="card-body container">
                        @if(isset($page) && $page->content > '')
                            <div class="row">
                                <div class="col-12">
                                    {!! $page->content !!}
                                </div>
                            </div>
                            <hr>
                        @endif
                        <div class="row d-flex justify-content-around">
{{--                            @foreach($keywords as $keyword)--}}
{{--                                <a href="{{route('roulette', ['keyword' => $keyword])}}" class="btn btn-danger btn-lg"--}}
{{--                                >{{$keyword->name}}</a>--}}
{{--                            @endforeach--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
