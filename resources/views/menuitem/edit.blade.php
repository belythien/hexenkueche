@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header"><h1>{{ __('Gericht bearbeiten') }}</h1></div>
        <div class="card-body">
            {!! Form::open([ 'action' => [ 'MenuItemController@update', $menuItem->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
            <div class="row">
                <div class="form-group col-lg-6">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $menuItem->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>
                <div class="form-group col-lg-6">
                    {{Form::label('category', 'Kategorie')}}
                    {{Form::select('category[]', $categories, $menuItem->category_id, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('description', 'Beschreibung')}}
                {{Form::textarea('description', $menuItem->description, ['id' => 'text-ckeditor', 'class' => 'form-control', 'placeholder' => 'Beschreibung'])}}
            </div>
            <hr class="strong-hr">
            <h5>Allergene</h5>
            <div class="row">
                @foreach($allergens as $allergen)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        {{Form::checkbox('allergen[]', $allergen->id, (in_array($allergen->id, $menuItem->allergens->pluck('id')->toArray()) ? true : false )) }}
                        {{Form::label('allergen', $allergen->name)}}
                    </div>
                @endforeach
            </div>
            <hr class="strong-hr">
            <div class="row">
                <div class="form-group col-lg-6">
                    {{Form::label('publication', 'Anzeigen ab')}}
                    {{Form::date('publication', $menuItem->publication, ['class' => 'form-control', 'placeholder' => 'Anzeigen ab'])}}
                </div>
                <div class="form-group col-lg-6">
                    {{Form::label('expiration', 'Anzeigen bis')}}
                    {{Form::date('expiration', $menuItem->expiration, ['class' => 'form-control', 'placeholder' => 'Anzeigen bis'])}}
                </div>
            </div>

            <div class="row">
                @foreach( $menuItem->images as $image )
                    <div class="col-xl-4 col-lg-5 edit_image">
                        <img src="{{ asset('/storage/img/' . $image->filename ) }}" alt=""
                             class="img-thumbnail mr-2 float-left"
                        />
                    </div>
                @endforeach
                <div class="col-xl-8 col-lg-7">
                    <div class="form-group">
                        {{Form::label('image', 'Bild')}}
                        {{Form::file('image')}}
                    </div>
                </div>
            </div>

            <div class="mt-3">
                {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                    ></i> {{ __('Abbrechen') }}</a>
            </div>
            <h3 class="mt-5">Optionen</h3>
            @foreach($menuItem->options as $option)
                <hr class="strong-hr">
                <div class="row my-3">
                    {{Form::hidden('option_id[]', $option->id)}}
                    <div class="col-lg-6">
                        {{Form::label('option_name', 'Name')}}
                        {{Form::text('option_name[]', $option->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="col-lg-3">
                        {{Form::label('option_amount', 'Menge')}}
                        {{Form::text('option_amount[]', $option->amount, ['class' => 'form-control', 'placeholder' => 'Menge'])}}
                    </div>
                    <div class="col-lg-3">
                        {{Form::label('option_price', 'Preis')}}
                        {{Form::text('option_price[]', str_replace('.', ',', number_format($option->price, 2)), ['class' => 'form-control', 'placeholder' => 'Preis'])}}
                    </div>
                </div>
            @endforeach
            <hr class="strong-hr">
            <div class="row my-3">
                <div class="col-lg-6">
                    {{Form::label('option_name_new', 'Name')}}
                    {{Form::text('option_name_new', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>
                <div class="col-lg-3">
                    {{Form::label('option_amount_new', 'Menge')}}
                    {{Form::text('option_amount_new', '', ['class' => 'form-control', 'placeholder' => 'Menge'])}}
                </div>
                <div class="col-lg-3">
                    {{Form::label('option_price_new', 'Preis')}}
                    {{Form::text('option_price_new', '', ['class' => 'form-control', 'placeholder' => 'Preis'])}}
                </div>
            </div>
            <div class="mt-3">
                {{Form::button('<i class="fas fa-save"></i> Speichern', ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                    ></i> {{ __('Abbrechen') }}</a>
            </div>
            {{Form::hidden('_method','PUT')}}
            {!! Form::close() !!}
            {!!Form::open(['action' => ['MenuItemController@destroy', $menuItem->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('<i class="fas fa-trash-alt"></i> Löschen', ['class' => 'btn btn-outline-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll der Eintrag ' . $menuItem->name . ' wirklich gelöscht werden?")'])}}
            {!!Form::close()!!}
        </div>
    </div>
    </div>
    </div>
@endsection

