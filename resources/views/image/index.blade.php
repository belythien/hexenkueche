@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Bilder verwalten') }}</h1>
        </div>
        <div class="card-body">
{{--            <div class="text-right">--}}
{{--                <a href="{{ route('image.create') }}" class="btn btn-danger"><i class="fas fa-upload"--}}
{{--                    ></i> {{ __('Bild hochladen' ) }}</a>--}}
{{--            </div>--}}
            @if(sizeof($images) == 0)
                <em>{{ __('Es sind noch keine Bilder angelegt') }}</em>
            @else
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col" width="260">{{ __('Bild') }}</th>
                            <th scope="col">Gerichte/Getränke</th>
                            <th scope="col">Seiten</th>
                            <th scope="col">Events</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $image)
                            <tr>
                                <td><strong>{{ $image->name }}</strong><br>
                                    {{ $image->filename }}<br>
                                    <img src="storage/img/{{ $image->filename }}" class="img-thumbnail" width="200" />
                                </td>
                                <td>
                                    @foreach($image->menuitems as $menuitem)
                                        <div>{{ $menuitem->name }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($image->pages as $page)
                                        <div>
                                            <a href="{{ '/' . $page->slug }}">{{ $page->menu_title }}</a>
                                        </div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($image->events as $event)
                                        <div>
                                            <div>{{ $event->name }}</div>
                                        </div>
                                    @endforeach
                                </td>
                                <td>
                                    {!!Form::open(['action' => ['ImageController@destroy', $image->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="fas fa-trash-alt"></i>', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll das Bild wirklich gelöscht werden?")'])}}
                                    {!!Form::close()!!}
                                    <a class="btn btn-sm btn-success float-right"
                                       href="{{ route('image.edit', [$image->id]) }}"
                                    ><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
