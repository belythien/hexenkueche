@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{ __('Seite bearbeiten') }}</h1>
    </div>
    <div class="card-body">

        {!! Form::open(['action' => [ 'PageController@update', $page->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			<div class="row">
				<div class="form-group col-md-6">
					{{Form::label('menu_title', 'Titel (kurz)')}}
					{{Form::text('menu_title', $page->menu_title, ['class' => 'form-control', 'placeholder' => 'Titel (kurz)'])}}
				</div>
				<div class="form-group col-md-6">
					{{Form::label('slug', 'Slug')}}
					{{Form::text('slug', $page->slug, ['class' => 'form-control', 'placeholder' => 'Slug'])}}
				</div>			
			</div>
			<div class="form-group">
					{{Form::label('title', 'Titel')}}
					{{Form::text('title', $page->title, ['class' => 'form-control', 'placeholder' => 'Titel'])}}
				</div>			
            <div class="form-group">
                {{Form::label('content', 'Inhalt')}}
                {{Form::textarea('content', $page->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Inhalt'])}}
            </div>
			<div class="form-group">
                <label for="status_active" class="badge badge-success">aktiv</label>
				<input name="status" type="radio" value="1" id="status_active" {{ $page->status == 1 ? 'checked="checked"' : '' }}>
				<label for="status_inactive" class="badge badge-danger">inaktiv</label>
				<input name="status" type="radio" value="0" id="status_inactive" {{ $page->status == 0 ? 'checked="checked"' : '' }}>
				<p>{{ __('Solange die Seite inaktiv ist, kann sie nur von eingeloggten Usern aufgerufen werden') }}</p>
            </div>
			<div class="row">
				<div class="form-group col-md-6">
					{{Form::label('publication', 'Anzeigen ab')}}
					{{Form::date('publication', $page->publication, ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
				</div>
				<div class="form-group col-md-6">
					{{Form::label('expiration', 'Anzeigen bis')}}
					{{Form::date('expiration', $page->expiration, ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
				</div>
			</div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Aktualisieren', ['class'=>'btn btn-danger'])}}
            <a href="{{ route('page.index') }}" class="btn btn-success">{{ __('Abbrechen') }}</a>
        {!! Form::close() !!}
        {!!Form::open(['action' => ['PageController@destroy', $page->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Löschen', ['class' => 'btn btn-outline-danger'])}}
        {!!Form::close()!!}
    </div>
</div>
@endsection