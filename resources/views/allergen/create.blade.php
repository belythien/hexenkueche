@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Allergen anlegen') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open([ 'action' => 'AllergenController@store', 'method' => 'POST' ]) !!}
            @foreach(language()->allowed() as $code => $language)
                <div class="form-group">
                    {{Form::label('name[' . $code . ']', __('Name') . ' ' . __($language))}}
                    {{Form::text('name[' . $code . ']', '', ['class' => 'form-control', 'placeholder' => __('Name') . ' ' . __($language)])}}
                </div>
            @endforeach
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
