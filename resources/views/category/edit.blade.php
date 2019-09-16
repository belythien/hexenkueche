@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Kategorie bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open(['action' => [ 'CategoryController@update', $category->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('sort', __('Sortierwert'))}}
                {{Form::text('sort', $category->sort, ['class' => 'form-control', 'placeholder' => __('Sortierwert')])}}
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="form-group col-md-6">
                        {{Form::label('name[' . $code . ']', __('Name') . ' ' . __($language))}}
                        {{Form::text('name[' . $code . ']', $category->translate($code)->name, ['class' => 'form-control', 'placeholder' => __('Name') . ' ' . __($language)])}}
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="form-group col-xl-6">
                        {{Form::label('description[' . $code . ']', __('Beschreibung') . ' ' . __($language))}}
                        {{Form::textarea('description[' . $code . ']', $category->translate($code)->description, ['class' => 'text-ckeditor form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{__('aktiv')}}</label>
                <input name="status" type="radio" value="1"
                       id="status_active" {{ $category->status == 1 ? 'checked="checked"' : '' }}>
                <label for="status_inactive" class="badge badge-danger">{{__('inaktiv')}}</label>
                <input name="status" type="radio" value="0"
                       id="status_inactive" {{ $category->status == 0 ? 'checked="checked"' : '' }}>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('publication', __('Anzeigen ab'))}}
                    {{Form::date('publication', $category->publication, ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('expiration', __('Anzeigen bis'))}}
                    {{Form::date('expiration', $category->expiration, ['class' => 'form-control'])}}
                </div>
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
            {!!Form::open(['action' => ['CategoryController@destroy', $category->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('<i class="fas fa-trash-alt"></i> ' . __('Löschen'), ['class' => 'btn btn-outline-danger', 'type' => 'submit', 'onclick' => 'return confirm("' . __('Soll die Kategorie :category wirklich gelöscht werden?', ['category' => $category->name]) . '")'])}}
            {!!Form::close()!!}
        </div>
    </div>
@endsection
