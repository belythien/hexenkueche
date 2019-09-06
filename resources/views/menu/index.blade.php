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
                        <th scope="col"></th>
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
                                        {!! Form::open(['action' => ['MenuController@removePage', $menu->id, $page->id], 'method' => 'POST', 'class' => 'float-left'])!!}
                                        {{ Form::hidden('_method', 'DELETE')}}
                                        {{ Form::button('<i class="fas fa-trash-alt"></i>', ['class' => 'btn btn-outline-danger btn-sm mr-2', 'type' => 'submit', 'onclick' => 'return confirm("Soll der Eintrag wirklich gelöscht werden?")'])}}
                                        {!! Form::close() !!}

                                        {!! Form::open(['action' => [ 'MenuController@moveUp', $menu->id, $page->id ], 'method' => 'POST', 'class' => 'float-left' ]) !!}
                                        {{ Form::button('<i class="fas fa-arrow-up"></i>', [ 'class' => 'btn btn-outline-success btn-sm mr-2 mb-1', 'title' => 'nach oben verschieben', 'type' => 'submit' ])}}
                                        {!! Form::close() !!}

                                        {!! Form::open(['action' => [ 'MenuController@moveDown', $menu->id, $page->id ], 'method' => 'POST' ]) !!}
                                        {{ Form::button('<i class="fas fa-arrow-down"></i>', ['class' => 'btn btn-outline-success btn-sm mr-2 mb-1', 'title' => 'nach unten verschieben', 'type' => 'submit'])}}
                                        {{ $page->menu_title }}
                                        {!! Form::close() !!}
                                    </div>
                                @endforeach
                            </td>
                            <td>
                                <div class="form-group form-inline">
                                    {!! Form::open(['action' => ['MenuController@addPage', $menu->id ], 'method' => 'POST' ]) !!}
                                    {{ Form::select('page[]', $menu->otherPages()->pluck('menu_title', 'id'), '', ['class' => 'form-control']) }}
                                    {{ Form::button('<i class="fas fa-plus-circle"></i>', ['class' => 'btn btn-outline-success mr-2', 'title' => 'Seite hinzufügen', 'type' => 'submit'])}}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
