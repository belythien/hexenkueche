@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Hotbox anlegen') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open([ 'action' => 'HotboxController@store', 'method' => 'POST' ]) !!}
            <div class="form-group row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="col-lg-6">
                        {{Form::label('text[' . $code . ']', __('Text') . ' ' . __($language))}}
                        {{Form::textarea('text[' . $code . ']', '', ['class' => 'text-ckeditor form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                {{Form::label('url', __('Slug der Ziel-Seite'))}}
                {{Form::text('url', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{ __('aktiv') }}</label>
                <input name="status" type="radio" value="1" id="status_active" checked="checked">
                <label for="status_inactive" class="badge badge-danger">{{ __('inaktiv') }}</label>
                <input name="status" type="radio" value="0" id="status_inactive">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('publication', __('Anzeigen ab'))}}
                    {{Form::date('publication', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('expiration', __('Anzeigen bis'))}}
                    {{Form::date('expiration', '', ['class' => 'form-control'])}}
                </div>
            </div>
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
