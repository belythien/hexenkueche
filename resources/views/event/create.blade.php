@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Event anlegen') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open([ 'action' => 'EventController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="form-group row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="col-md-6">
                        {{Form::label('name[' . $code . ']', __('Name') . ' ' . __($language))}}
                        {{Form::text('name[' . $code . ']', '', ['class' => 'form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    {{Form::label('date', __('Datum'))}}
                    {{Form::date('date', '', ['class' => 'form-control'])}}
                </div>
                <div class="col-md-6">
                    {{Form::label('time', __('Uhrzeit'))}}
                    {{Form::time('time', '', ['class' => 'form-control'])}}
                </div>
                <div class="col-12 mt-3">
                    {{Form::checkbox('periodically', 1 )}}
                    {{Form::label('periodically', __('Regelmäßig'))}}
                </div>
            </div>
            <div class="form-group row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="col-xl-6">
                        {{Form::label('description[' . $code . ']', __('Beschreibung') . ' ' . __($language))}}
                        {{Form::textarea('description[' . $code . ']', '', ['class' => 'text-ckeditor form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{ __('aktiv') }}</label>
                <input name="status" type="radio" value="1" id="status_active" checked="checked">
                <label for="status_inactive" class="badge badge-danger">{{ __('inaktiv') }}</label>
                <input name="status" type="radio" value="0" id="status_inactive">
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
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
