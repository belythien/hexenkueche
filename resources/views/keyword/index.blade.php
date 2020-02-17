@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Keywords') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('keyword.create') }}" class="btn btn-danger"><i class="fas fa-plus-circle"
                    ></i> {{ __('Keyword anlegen' ) }}</a>
            </div>
            @if(sizeof($keywords) == 0)
                <em>{{ __('Es sind noch keine Keywords angelegt') }}</em>
            @else
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('ID') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Speisen/Getränke') }}</th>
                            <th scope="col" style="width:100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($keywords as $keyword)
                            <tr>
                                <th scope="row">
                                    {{ $keyword->id }}
                                </th>
                                <td>{{ $keyword->name }}</td>
                                <td>
                                    <ul class="separated-list">
                                    @foreach($keyword->menuitems as $menuitem)
                                        <li><a href="{{ route('menuitem.edit', [$menuitem->id]) }}" class="be_keyword"
                                        >{{ $menuitem->name }}</a></li>
                                    @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success float-right"
                                       href="{{ route('keyword.edit', [$keyword->id]) }}"
                                    ><i class="fas fa-edit"></i></a>
                                    {!!Form::open(['action' => ['KeywordController@destroy', $keyword->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="fas fa-trash-alt"></i>', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit', 'onclick' => 'return confirm("' . __('remove.keyword', ['keyword'=> $keyword->name]) . '")'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
