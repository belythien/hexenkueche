@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{ __('Seite anlegen') }}</h1>
    </div>
    <div class="card-body">

        {!! Form::open([ 'action' => 'PageController@store', 'method' => 'POST' ]) !!}
           <div class="row">
				<div class="form-group col-md-5">
					{{Form::label('menu_title', 'Titel (kurz)')}}
					{{Form::text('menu_title', '', ['class' => 'form-control', 'placeholder' => 'Titel (kurz)'])}}
					<p class="my-1 admin_info_text">Für Anzeige in der Navigation</p>
				</div>
				<div class="form-group col-md-7">
					{{Form::label('slug', 'Slug')}}
					{{Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'slug'])}}
					<p class="my-1 admin_info_text">Kurzform des Titels für die URL. Nur Kleinbuchstaben. Kann nachträglich nicht mehr geändert werden.</p>
				</div>			
			</div>
			<div class="form-group">
					{{Form::label('title', 'Titel')}}
					{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titel'])}}
					<p class="my-1 admin_info_text">Für Anzeige auf der Seite</p>
				</div>			
            <div class="form-group">
                {{Form::label('content', 'Inhalt')}}
                {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Inhalt'])}}
            </div>
			<div class="form-group">
				{{Form::label('hotbox_id', 'Hotbox')}}
                {{Form::select('hotbox_id[]', [ null => '-----------------'] + $hotboxes->toArray(), '', ['class' => 'form-control'])}}
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					{{Form::label('publication', 'Anzeigen ab (optional)')}}
					{{Form::date('publication', '', ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
				</div>
				<div class="form-group col-md-6">
					{{Form::label('expiration', 'Anzeigen bis (optional)')}}
					{{Form::date('expiration', '', ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
				</div>
			</div>
            {{Form::submit('Anlegen', ['class'=>'btn btn-danger'])}}
            <a href="{{ route('page.index') }}" class="btn btn-success">{{ __('Abbrechen') }}</a>
        {!! Form::close() !!}
    </div>
</div>
@endsection