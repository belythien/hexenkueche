@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Bild bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open([ 'action' => ['ImageController@update', $image->id], 'method' => 'POST' ]) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $image->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
