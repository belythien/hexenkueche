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
                                    <a href="{{ route('event.index') }}"
                                       class="btn btn-danger float-right ml-3"
                                    ><i class="far fa-calendar-alt"></i> {{ __('Events bearbeiten') }}</a>
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
                        @foreach($events as $event)
                            @if($event->status == 1 && (empty($event->date) || $event->date >= date('Y-m-d')))
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h2>
                                            {{ $event->name }}
                                            @if(!empty($event->date))
                                                • <span class="">{{ date('d.m.Y', strtotime($event->date)) }}</span>
                                            @endif
                                            @if(!empty($event->time))
                                                • <span class="">{{ date('H:i', strtotime($event->time)) }} Uhr</span>
                                            @endif
                                        </h2>
                                        {!! $event->description !!}
                                    </div>
                                    <div class="col-lg-4">
                                        @foreach($event->images as $image)
                                            <a href="{{ route('image.show', [$image->id]) }}">
                                                <img
                                                    src="{{ asset('storage/img/' . $image->filename ) }}"
                                                    alt="" class="img-thumbnail my-2"
                                                    title="{{ $image->name  }}"
                                                />
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
