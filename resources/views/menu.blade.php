@extends('layouts.app')

@section('content')
    <div class="container position-relative">
        <div class="card d-none d-xxl-block" style="position: fixed;top: 150px;left:0">
            <ul class="nav flex-column">
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a href="#category_{{$category->id}}"
                           class="nav-link"
                        >{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
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
                                    <a href="{{ route('menuitem.index') }}"
                                       class="btn btn-danger float-right ml-3"
                                    ><i class="fas fa-edit"></i> {{ __('Gerichte bearbeiten') }}</a>
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
                        <div class="row">
                            @foreach($categories as $category)
                                @if($category->isLive() == 1)
                                    @if(!empty($category->template))
                                        @include('category.template.' . $category->template)
                                    @else
                                        @include('category.template.default')
                                    @endif
                                @endif
                            @endforeach
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
    </div>
@endsection
