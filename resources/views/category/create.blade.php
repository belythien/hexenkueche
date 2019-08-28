@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{ __('Kategorie anlegen') }}</h1>
    </div>
    <div class="card-body">

        {!! Form::open([ 'action' => 'CategoryController@store', 'method' => 'POST' ]) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Beschreibung')}}
                {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beschreibung'])}}
            </div>
            {{Form::submit('Anlegen', ['class'=>'btn btn-danger'])}}
            <a href="{{ route('menuitem.index') }}" class="btn btn-success">{{ __('Abbrechen') }}</a>
        {!! Form::close() !!}
    </div>
</div>
@endsection