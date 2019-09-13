@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Gericht/Getränk anlegen') }}</h1>
        </div>
        <div class="card-body">

            {!! Form::open([ 'action' => 'MenuItemController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="row">
                <div class="form-group col-lg-6">
                    {{Form::label('name', __('Name'))}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => __('Name')])}}
                </div>
                <div class="form-group col-lg-6">
                    {{Form::label('category', __('Kategorie'))}}
                    {{Form::select('category[]', $categories->pluck('name', 'id'), '', ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('description', __('Beschreibung'))}}
                {{Form::textarea('description', '', ['id' => 'text-ckeditor', 'class' => 'form-control'])}}
            </div>

            <hr class="strong-hr">
            <h5>{{__('Allergene')}}</h5>
            <div class="row">
                @foreach($allergens as $allergen)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        {{Form::checkbox('allergen[]', $allergen->id, false ) }}
                        {{Form::label('allergen', $allergen->name)}}
                    </div>
                @endforeach
            </div>
            <hr class="strong-hr">
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{__('aktiv')}}</label>
                <input name="status" type="radio" value="1" id="status_active" checked="checked">
                <label for="status_inactive" class="badge badge-danger">{{__('inaktiv')}}</label>
                <input name="status" type="radio" value="0" id="status_inactive">
                <label for="status_not_available" class="badge badge-warning">{{__('Zur Zeit nicht erhältlich')}}</label>
                <input name="status" type="radio" value="2" id="status_not_available">
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    {{Form::label('publication', __('Anzeigen ab'))}}
                    {{Form::date('publication', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-lg-6">
                    {{Form::label('expiration', __('Anzeigen bis'))}}
                    {{Form::date('expiration', '', ['class' => 'form-control'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('image', __('Bild'))}}
                {{Form::file('image')}}
            </div>
            <div class="mt-3">
                {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                    ></i> {{ __('Abbrechen') }}</a>
            </div>

            <h3 class="mt-5">{{__('Optionen')}}</h3>
            @for($i = 1; $i <= 10; $i++)
                <hr class="strong-hr">
                <div class="row my-3">
                    <div class="col-lg-6">
                        {{Form::label('option_name', $i . ') ' . __('Name'))}}
                        {{Form::text('option_name[]', '', ['class' => 'form-control', 'placeholder' => __('Name')])}}
                    </div>
                    <div class="col-lg-3">
                        {{Form::label('option_amount', __('Menge'))}}
                        {{Form::text('option_amount[]', '', ['class' => 'form-control', 'placeholder' => __('Menge')])}}
                    </div>
                    <div class="col-lg-3">
                        {{Form::label('option_price', __('Preis'))}}
                        {{Form::text('option_price[]', '', ['class' => 'form-control', 'placeholder' => __('Preis')])}}
                    </div>
                </div>
            @endfor
            <div class="mt-3">
                {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                    ></i> {{ __('Abbrechen') }}</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
