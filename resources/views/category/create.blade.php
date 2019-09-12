@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Kategorie anlegen') }}</h1>
        </div>
        <div class="card-body">

            {!! Form::open([ 'action' => 'CategoryController@store', 'method' => 'POST' ]) !!}
            <div class="form-group row">
                <div class="col-md-2 col-sm-3">
                    {{Form::label('sort', 'Sortierwert')}}
                    {{Form::text('sort', '', ['class' => 'form-control', 'placeholder' => 'Sortierwert'])}}
                </div>
                <div class="col-md-10 col-sm-9">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('description', 'Beschreibung')}}
                {{Form::textarea('description', '', ['id' => 'text-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beschreibung'])}}
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{ __('aktiv') }}</label>
                <input name="status" type="radio" value="1" id="status_active">
                <label for="status_inactive" class="badge badge-danger">{{ __('inaktiv') }}</label>
                <input name="status" type="radio" value="0" id="status_inactive" checked="checked">
            </div>
            <div class="form-group">
                {{Form::label('publication', 'Anzeigen ab')}}
                {{Form::date('publication', '', ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
            </div>
            <div class="form-group">
                {{Form::label('expiration', 'Anzeigen bis')}}
                {{Form::date('expiration', '', ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
            </div>
            {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
