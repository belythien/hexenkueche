@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(isset($page->title))
                        <div class="card-header">
                            <h1>{{ isset($page) ? $page->title : '' }}</h1>
                        </div>
                    @endif

                    <div class="card-body">
                        {!! isset($page) ? $page->content : ''!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
