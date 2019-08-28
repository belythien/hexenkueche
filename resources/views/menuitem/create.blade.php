@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{ __('Gericht anlegen') }}</h1>
    </div>
    <div class="card-body">

        {!! Form::open([ 'action' => 'MenuItemController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('category', 'Kategorie')}}
                {{Form::select('category[]', $categories->pluck('name', 'id'), '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Beschreibung')}}
                {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beschreibung'])}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'Preis')}}
                {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Preis'])}}
            </div>
            <div class="form-group">
                {{Form::file('image')}}
            </div>
            {{Form::submit('Anlegen', ['class'=>'btn btn-danger'])}}
            <a href="{{ route('menuitem.index') }}" class="btn btn-success">{{ __('Abbrechen') }}</a>
        {!! Form::close() !!}
    </div>
</div>
@endsection