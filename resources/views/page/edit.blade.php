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
                    {{Form::label('menu_title', __('Titel (kurz)'))}}
                    {{Form::text('menu_title', $page->menu_title, ['class' => 'form-control', 'placeholder' => __('Titel (kurz)')])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('slug', 'Slug')}}
                    {{Form::text('slug', $page->slug, ['disabled' => 'true', 'class' => 'form-control', 'placeholder' => 'Slug'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('title', __('Titel'))}}
                {{Form::text('title', $page->title, ['class' => 'form-control', 'placeholder' => __('Titel')])}}
            </div>
            <div class="form-group">
                {{Form::label('content', __('Inhalt'))}}
                {{Form::textarea('content', $page->content, ['id' => 'text-ckeditor', 'class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('external_url', __('Weiterleitungs-URL'))}}
                {{Form::text('external_url', $page->external_url, ['class' => 'form-control', 'placeholder' => 'z.B. https://www.facebook.com/Hexenküche-2291286144436000/'])}}
                <p>{{ __('Wenn hier eine URL eingetragen ist, leitet der Aufruf dieser Seite sofort dorthin weiter.') }}</p>
            </div>
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{__('aktiv')}}</label>
                <input name="status" type="radio" value="1"
                       id="status_active" {{ $page->status == 1 ? 'checked="checked"' : '' }}>
                <label for="status_inactive" class="badge badge-danger">{{__('inaktiv')}}</label>
                <input name="status" type="radio" value="0"
                       id="status_inactive" {{ $page->status == 0 ? 'checked="checked"' : '' }}>
                <p>{{ __('Solange die Seite inaktiv ist, kann sie nur von eingeloggten Usern aufgerufen werden') }}</p>
            </div>
            <div class="form-group">
                {{Form::label('hotbox_id', __('Hotbox'))}}
                {{Form::select('hotbox_id[]', [ null => '-----------------'] + $hotboxes->toArray(), $page->hotbox_id, ['class' => 'form-control'])}}
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('publication', __('Anzeigen ab'))}}
                    {{Form::date('publication', $page->publication, ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('expiration', __('Anzeigen bis'))}}
                    {{Form::date('expiration', $page->expiration, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div>{{__('Es können beliebig viele Bilder hochgeladen werden, aber immer nur eins auf einmal.')}}</div>
                        {{Form::label('image', __('Bild'))}}
                        {{Form::file('image')}}
                    </div>
                </div>
            </div>

            <div class="row">
                {{Form::hidden('_method','PUT')}}
                <div class="col-sm-10">
                    {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger mb-3', 'type' => 'submit'])}}
                    <a href="{{ url()->previous() }}" class="btn btn-success mb-3"><i class="fas fa-times-circle"
                        ></i> {{ __('Abbrechen') }}</a>
                </div>
                {!! Form::close() !!}
                @if($page->slug != '404' && $page->slug != 'speisekarte' && $page->slug != 'home')
                    <div class="col-sm-2">
                        {!!Form::open(['action' => ['PageController@destroy', $page->id], 'method' => 'POST', 'class' => ''])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::button('<i class="fas fa-trash-alt"></i> ' . __('Löschen'), ['class' => 'btn btn-outline-danger float-right', 'type' => 'submit', 'onclick' => 'return confirm("Soll der Eintrag ' . $page->menu_title . ' wirklich gelöscht werden?")'])}}
                        {!!Form::close()!!}
                    </div>
                @endif
            </div>
            <div class="row">
                @foreach($page->images as $image)
                    <div class="col-md-3 col-sm-2 edit_image">
                        {!!Form::open(['action' => ['PageController@removeImage', $page->id, $image->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::button('<i class="fas fa-trash-alt"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit', 'onclick' => 'return confirm("Soll das Bild wirklich entfernt werden?")'])}}
                        {!!Form::close()!!}
                        <img src="{{ asset('/storage/img/' . $image->filename ) }}" class="img-thumbnail mb-3" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
