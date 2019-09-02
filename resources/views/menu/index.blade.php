@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Navi-Leisten bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20px">{{ __('ID') }}</th>
                        <th scope="col" style="width: 150px;">{{ __('Navi-Leiste') }}</th>
                        <th scope="col">{{ __('Seiten') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                        <tr>
                            <th scope="row">
                                {{ $menu->id }}
                            </th>
                            <td>
                                <strong>{{ $menu->title }}</strong><br>
                                {{ $menu->description }}
                            </td>
                            <td>
                                @foreach($menu->pages as $page)
                                    <div>
                                        {!! Form::open(['action' => [ 'MenuController@moveUp', $menu->id, $page->id ], 'method' => 'POST', 'class' => 'float-left' ]) !!}
                                        {{Form::submit('▲', ['class' => 'btn btn-outline-success btn-sm mr-2 mb-1', 'title' => 'nach oben verschieben'])}}
                                        {!! Form::close() !!}
                                        {!! Form::open(['action' => [ 'MenuController@moveDown', $menu->id, $page->id ], 'method' => 'POST' ]) !!}
                                        {{Form::submit('▼', ['class' => 'btn btn-outline-success btn-sm mr-2 mb-1', 'title' => 'nach unten verschieben'])}}
                                        {{ $page->menu_title }}
                                        {!! Form::close() !!}
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
