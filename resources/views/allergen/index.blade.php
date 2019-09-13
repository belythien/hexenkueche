@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Allergene bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('allergen.create') }}" class="btn btn-danger"><i class="fas fa-plus-circle"
                    ></i> {{ __('Allergen anlegen' ) }}</a>
            </div>
            @if(sizeof($allergens) == 0)
                <em>{{ __('Es sind noch keine Allergene angelegt') }}</em>
            @else
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('ID') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Enthalten in') }}</th>
                            <th scope="col" style="width:100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allergens as $allergen)
                            <tr>
                                <th scope="row">
                                    {{ $allergen->id }}
                                </th>
                                <td>{{ $allergen->name }}</td>
                                <td>
                                    @foreach($allergen->menuitems as $menuitem)
                                        <a href="{{ route('menuitem.edit', [$menuitem->id]) }}" class="be_allergen"
                                        >{{ $menuitem->name }}</a>
                                    @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success float-right"
                                       href="{{ route('allergen.edit', [$allergen->id]) }}"
                                    ><i class="fas fa-edit"></i></a>
                                    {!!Form::open(['action' => ['AllergenController@destroy', $allergen->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="fas fa-trash-alt"></i>', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll ' . $allergen->name . ' wirklich gelöscht werden?")'])}}
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
