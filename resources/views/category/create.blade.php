@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Kategorie anlegen') }}</h1>
        </div>
        <div class="card-body">

            {!! Form::open([ 'action' => 'CategoryController@store', 'method' => 'POST' ]) !!}
            <div class="form-group">
                {{Form::label('sort', __('Sortierwert'))}}
                {{Form::text('sort', '', ['class' => 'form-control', 'placeholder' => __('Sortierwert')])}}
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="form-group col-md-6">
                        {{Form::label('name[' . $code . ']', __('Name') . ' ' . __($language))}}
                        {{Form::text('name[' . $code . ']', '', ['class' => 'form-control', 'placeholder' => __('Name') . ' ' . __($language)])}}
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                {{Form::label('template', __('Template'))}}
                {{Form::select('template[]', [
                'default' => 'Default',
                'specials_01' => 'Specials #1',
                'specials_02' => 'Specials #2',
                'specials_03' => 'Specials #3'
                ], 'default', ['class' => 'form-control'])}}
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="form-group col-xl-6">
                        {{Form::label('description[' . $code . ']', __('Beschreibung') . ' ' . __($language))}}
                        {{Form::textarea('description[' . $code . ']', '', ['class' => 'text-ckeditor form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{ __('aktiv') }}</label>
                <input name="status" type="radio" value="1" id="status_active">
                <label for="status_inactive" class="badge badge-danger">{{ __('inaktiv') }}</label>
                <input name="status" type="radio" value="0" id="status_inactive" checked="checked">
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
