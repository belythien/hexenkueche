@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header"><h1>{{ __('Gericht bearbeiten') }}</h1></div>
        <div class="card-body">
            {!! Form::open([ 'action' => [ 'MenuItemController@update', $menuItem->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="row">
                <div class="form-group col-lg-6">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $menuItem->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>
                <div class="form-group col-lg-6">
                    {{Form::label('category', 'Kategorie')}}
                    {{Form::select('category[]', $categories, $menuItem->category_id, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('description', 'Beschreibung')}}
                {{Form::textarea('description', $menuItem->description, ['id' => 'text-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beschreibung'])}}
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                    {{Form::label('publication', 'Anzeigen ab')}}
                    {{Form::date('publication', $menuItem->publication, ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
                </div>
                <div class="form-group col-lg-6">
                    {{Form::label('expiration', 'Anzeigen bis')}}
                    {{Form::date('expiration', $menuItem->expiration, ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('image', 'Bild')}}
                {{Form::file('image')}}
            </div>

            <h3>Optionen</h3>
            @for($i = 1; $i <= 10; $i++)
                <hr class="strong-hr">
                <div class="row my-3">
                    <div class="col-lg-6">
                        {{Form::label('option_name', $i . ') Name')}}
                        {{Form::text('option_name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="col-lg-3">
                        {{Form::label('option_amount', 'Menge')}}
                        {{Form::text('option_amount', '', ['class' => 'form-control', 'placeholder' => 'Menge'])}}
                    </div>
                    <div class="col-lg-3">
                        {{Form::label('option_price', 'Preis')}}
                        {{Form::text('option_price', '', ['class' => 'form-control', 'placeholder' => 'Preis'])}}
                    </div>
                </div>
            @endfor
            <div class="mt-3">
                {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                    ></i> {{ __('Abbrechen') }}</a>
            </div>
            {!! Form::close() !!}
            {!!Form::open(['action' => ['MenuItemController@destroy', $menuItem->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('<i class="fas fa-trash-alt"></i> Löschen', ['class' => 'btn btn-outline-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll der Eintrag ' . $menuItem->name . ' wirklich gelöscht werden?")'])}}
            {!!Form::close()!!}
        </div>
    </div>
    </div>
    </div>
@endsection

