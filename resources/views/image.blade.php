@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(!empty($image))
                        @if(!empty($image->name))
                            <div class="card-header">
                                <h1>{{ $image->name }}
                                    <a href="{{ URL::previous() }}" class="btn btn-danger float-right"
                                    >{{ __('Zurück') }}</a>
                                </h1>
                            </div>
                        @endif

                        <div class="card-body container">
                            @if(!empty($image->filename))
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('/storage/img/' . $image->filename ) }}"
                                             class="img-thumbnail mb-3"
                                        />
                                    </div>
                                </div>
                            @endif
                            @if(!empty($image->copyright))
                                <div class="row">
                                    <div class="col-12">{!! $image->copyright !!}</div>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
