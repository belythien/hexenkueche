@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Bild bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="/storage/img/{{ $image->filename }}" class="img-thumbnail" />
                </div>
                <div class="col-md-9">
                    {!! Form::open([ 'action' => ['ImageController@update', $image->id], 'method' => 'POST' ]) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', $image->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <h2>Seiten</h2>
                    <div class="form-group row">
                        @foreach($pages as $page)
                            <div class="col-md-4">
                                {{Form::checkbox('page[]', $page->id, (in_array($page->id, $image->pages->pluck('id')->toArray()) ? true : false )) }}
                                {{Form::label('page', $page->menu_title)}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                    <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                        ></i> {{ __('Abbrechen') }}</a>
                </div>
            </div>
            <h2>Gerichte/Getränke</h2>
            <div class="form-group">
                @foreach($categories as $category)
                    <h3>{{ $category->name }}</h3>
                    <div class="row">
                        @foreach($category->menuitems as $menuitem)
                            <div class="col-md-6">
                                {{Form::checkbox('menuitem[]', $menuitem->id, (in_array($menuitem->id, $image->menuitems->pluck('id')->toArray()) ? true : false )) }}
                                {{Form::label('menuitem', $menuitem->name)}}
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
