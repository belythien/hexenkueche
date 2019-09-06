@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Bilder verwalten') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('image.create') }}" class="btn btn-danger"><i class="fas fa-upload"
                    ></i> {{ __('Bild hochladen' ) }}</a>
            </div>
            @if(sizeof($images) == 0)
                <em>{{ __('Es sind noch keine Bilder angelegt') }}</em>
            @else
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('Bild') }}</th>
                            @foreach($pages as $page)
                                <th scope="col">{{ $page->menu_title }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $image)
                            <tr>
                                <td><h4>{{ $image->name }}</h4>
                                    <img src="storage/img/{{ $image->filename }}" class="img-thumbnail" width="200" />
                                </td>
                                @foreach($pages as $page)
                                    <td>
                                        {{Form::checkbox('image[]', $page->id, false) }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
