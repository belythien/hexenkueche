@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(isset($page->title))
                        <div class="card-header">
                            <h1>{{ isset($page) ? $page->title : '' }}
                                @auth
                                    <a href="{{ route('page.edit', [ $page->id ]) }}" class="btn btn-danger float-right"><i class="fas fa-edit"></i> {{ __('Bearbeiten') }}</a>
                                @endauth
                            </h1>
                        </div>
                    @endif

                    <div class="card-body">
                        @include('template.' . $page->template)
                        @auth
                            <a href="{{ route('page.edit', [ $page->id ]) }}" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i> {{ __('Bearbeiten') }}</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
