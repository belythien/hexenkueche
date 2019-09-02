@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Hotbox anlegen') }}</h1>
        </div>
        <div class="card-body">

            {!! Form::open([ 'action' => 'HotboxController@store', 'method' => 'POST' ]) !!}
            <div class="form-group">
                {{Form::label('text', 'Text')}}
                {{Form::textarea('text', '', ['class' => 'form-control', 'id' => 'text-ckeditor', 'placeholder' => 'Text'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'Slug der Ziel-Seite (optional)')}}
                {{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'Slug der Ziel-Seite (optional)'])}}
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{ __('aktiv') }}</label>
                <input name="status" type="radio" value="1" id="status_active" checked="checked">
                <label for="status_inactive" class="badge badge-danger">{{ __('inaktiv') }}</label>
                <input name="status" type="radio" value="0" id="status_inactive">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('publication', 'Anzeigen ab (optional)')}}
                    {{Form::date('publication', '', ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('expiration', 'Anzeigen bis (optional)')}}
                    {{Form::date('expiration', '', ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
                </div>
            </div>
            {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
