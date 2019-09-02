@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Kategorie bearbeiten') }}</h1>
        </div>
        <div class="card-body">

            {!! Form::open(['action' => [ 'CategoryController@update', $category->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Beschreibung')}}
                {{Form::textarea('description', $category->description, ['id' => 'text-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beschreibung'])}}
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">aktiv</label>
                <input name="status" type="radio" value="1"
                       id="status_active" {{ $category->status == 1 ? 'checked="checked"' : '' }}>
                <label for="status_inactive" class="badge badge-danger">inaktiv</label>
                <input name="status" type="radio" value="0"
                       id="status_inactive" {{ $category->status == 0 ? 'checked="checked"' : '' }}>
            </div>
            <div class="form-group">
                {{Form::label('publication', 'Anzeigen ab')}}
                {{Form::date('publication', $category->publication, ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
            </div>
            <div class="form-group">
                {{Form::label('expiration', 'Anzeigen bis')}}
                {{Form::date('expiration', $category->expiration, ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
            {!!Form::open(['action' => ['CategoryController@destroy', $category->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('<i class="fas fa-trash-alt"></i> Löschen', ['class' => 'btn btn-outline-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll die Kategorie ' . $category->name . ' wirklich gelöscht werden?")'])}}
            {!!Form::close()!!}
        </div>
    </div>
@endsection
