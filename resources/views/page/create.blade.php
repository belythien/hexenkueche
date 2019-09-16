@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Seite anlegen') }}</h1>
        </div>
        <div class="card-body">
            {!! Form::open([ 'action' => 'PageController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="form-group">
                {{Form::label('slug', 'Slug')}}
                {{Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'slug'])}}
                <p class="my-1 admin_info_text">{{__('Kurzform des Titels für die URL. Nur Kleinbuchstaben. Kann nachträglich nicht mehr geändert werden.')}}</p>
            </div>
            @foreach(language()->allowed() as $code => $language)
                <div class="row">
                    <div class="form-group col-md-4">
                        {{Form::label('menu_title[' . $code . ']', __('Titel (kurz)') . ' ' . __($language))}}
                        {{Form::text('menu_title[' . $code . ']', '', ['class' => 'form-control', 'placeholder' => __('Titel (kurz)') . ' ' . __($language)])}}
                        <p class="my-1 admin_info_text">{{__('Für Anzeige in der Navigation')}}</p>
                    </div>
                    <div class="form-group col-md-8">
                        {{Form::label('title[' . $code . ']', __('Titel') . ' ' . __($language))}}
                        {{Form::text('title[' . $code . ']', '', ['class' => 'form-control', 'placeholder' => __('Titel') . ' ' . __($language)])}}
                        <p class="my-1 admin_info_text">{{__('Für Anzeige auf der Seite')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('content[' . $code . ']', __('Inhalt') . ' ' . __($language))}}
                    {{Form::textarea('content[' . $code . ']', '', ['class' => 'text-ckeditor form-control'])}}
                </div>
            @endforeach

            <div class="form-group">
                {{Form::label('external_url', __('Weiterleitungs-URL'))}}
                {{Form::text('external_url', '', ['class' => 'form-control', 'placeholder' => __('z.B.') . ' https://www.facebook.com/Hexenküche-2291286144436000/'])}}
                <p>{{ __('Wenn hier eine URL eingetragen ist, leitet der Aufruf dieser Seite sofort dorthin weiter.') }}</p>
            </div>
            <div class="form-group">
                {{Form::label('hotbox_id', __('Hotbox'))}}
                {{Form::select('hotbox_id[]', [ null => '-----------------'] + $hotboxes->toArray(), '', ['class' => 'form-control'])}}
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('publication', __('Anzeigen ab'))}}
                    {{Form::date('publication', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('expiration', __('Anzeigen bis'))}}
                    {{Form::date('expiration', '', ['class' => 'form-control'])}}
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
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
