@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Keyword bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open([ 'action' => ['KeywordController@update', $keyword->id], 'method' => 'POST' ]) !!}
            @foreach(language()->allowed() as $code => $language)
                <div class="form-group">
                    {{Form::label('name[' . $code . ']', __('Name') . ' ' . __($language))}}
                    {{Form::text('name[' . $code . ']', $keyword->translate($code)->name, ['class' => 'form-control', 'placeholder' => __('Name') . ' ' . __($language)])}}
                </div>
            @endforeach
            {{Form::hidden('_method','PUT')}}
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
