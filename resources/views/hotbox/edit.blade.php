@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Hotbox bearbeiten') }}</h1>
        </div>
        <div class="card-body">

            {!! Form::open(['action' => [ 'HotboxController@update', $hotbox->id ], 'method' => 'POST' ]) !!}
            <div class="form-group">
                {{Form::label('text', 'Text')}}
                {{Form::textarea('text', $hotbox->text, ['class' => 'form-control', 'id' => 'text-ckeditor', 'placeholder' => 'Text'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'Slug der Ziel-Seite (optional)')}}
                {{Form::text('url', $hotbox->url, ['class' => 'form-control', 'placeholder' => 'Slug der Ziel-Seite (optional)'])}}
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">aktiv</label>
                <input name="status" type="radio" value="1"
                       id="status_active" {{ $hotbox->status == 1 ? 'checked="checked"' : '' }}>
                <label for="status_inactive" class="badge badge-danger">inaktiv</label>
                <input name="status" type="radio" value="0"
                       id="status_inactive" {{ $hotbox->status == 0 ? 'checked="checked"' : '' }}>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('publication', 'Anzeigen ab (optional)')}}
                    {{Form::date('publication', $hotbox->publication, ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('expiration', 'Anzeigen bis (optional)')}}
                    {{Form::date('expiration', $hotbox->expiration, ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
                </div>
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
            {!!Form::open(['action' => ['HotboxController@destroy', $hotbox->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('<i class="fas fa-trash-alt"></i> Löschen', ['class' => 'btn btn-outline-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll Hotbox ' . $hotbox->id . ' wirklich gelöscht werden?")'])}}
            {!!Form::close()!!}
        </div>
    </div>
@endsection
