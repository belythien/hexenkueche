@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Event bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open(['action' => [ 'EventController@update', $event->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="form-group">
                {{Form::label('name', __('Name'))}}
                {{Form::text('name', $event->name, ['class' => 'form-control', 'placeholder' => __('Name')])}}
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    {{Form::label('date', __('Datum'))}}
                    {{Form::date('date', $event->date, ['class' => 'form-control'])}}
                </div>
                <div class="col-md-6">
                    {{Form::label('time', __('Uhrzeit'))}}
                    {{Form::time('time', $event->time, ['class' => 'form-control'])}}
                </div>
                <div class="col-12 mt-3">
                    {{Form::checkbox('periodically', 1, $event->periodically == 1 ? true : false )}}
                    {{Form::label('periodically', __('Regelmäßig'))}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('description', __('Beschreibung'))}}
                {{Form::textarea('description', $event->description, ['id' => 'text-ckeditor', 'class' => 'form-control'])}}
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{__('aktiv')}}</label>
                <input name="status" type="radio" value="1"
                       id="status_active" {{ $event->status == 1 ? 'checked="checked"' : '' }}>
                <label for="status_inactive" class="badge badge-danger">{{__('inaktiv')}}</label>
                <input name="status" type="radio" value="0"
                       id="status_inactive" {{ $event->status == 0 ? 'checked="checked"' : '' }}>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div>{{__('Es können beliebig viele Bilder hochgeladen werden, aber immer nur eins auf einmal.')}}</div>
                        {{Form::label('image', __('Bild'))}}
                        {{Form::file('image')}}
                    </div>
                </div>
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
            {!!Form::open(['action' => ['EventController@destroy', $event->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('<i class="fas fa-trash-alt"></i> ' . __('Löschen'), ['class' => 'btn btn-outline-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll ' . $event->name . ' wirklich gelöscht werden?")'])}}
            {!!Form::close()!!}
        </div>
    </div>
@endsection
