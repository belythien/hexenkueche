@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header"><h1>{{ __('Gericht/Getränk bearbeiten') }}</h1></div>
        <div class="card-body">
            {!! Form::open([ 'action' => [ 'MenuItemController@update', $menuItem->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}

            <div class="form-group">
                <label for="category">{{__('Kategorie')}}</label>
                <select class="form-control" name="category[]">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                @if($menuItem->category_id == $category->id ) selected @endif
                        >{{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="form-group col-lg-6">
                        {{Form::label('name[' . $code . ']', __('Name') . ' ' . __($language))}}
                        {{Form::text('name[' . $code . ']', $menuItem->translate($code)->name, ['class' => 'form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="form-group col-xl-6">
                        {{Form::label('description[' . $code . ']', __('Beschreibung') . ' ' . __($language))}}
                        {{Form::textarea('description[' . $code . ']', $menuItem->translate($code)->description, ['class' => 'text-ckeditor form-control'])}}
                    </div>
                @endforeach
            </div>
            <hr class="strong-hr">
            <h5>{{__('Allergene')}}</h5>
            <div class="row">
                @foreach($allergens as $allergen)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        {{Form::checkbox('allergen[]', $allergen->id, (in_array($allergen->id, $menuItem->allergens->pluck('id')->toArray()) ? true : false )) }}
                        {{Form::label('allergen', $allergen->name)}}
                    </div>
                @endforeach
            </div>
            <hr class="strong-hr">
            <h5>{{__('Keywords')}}</h5>
            <div class="row">
                @foreach($keywords as $keyword)
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        {{Form::checkbox('keyword[]', $keyword->id, (in_array($keyword->id, $menuItem->keywords->pluck('id')->toArray()) ? true : false )) }}
                        {{Form::label('keyword', $keyword->name)}}
                    </div>
                @endforeach
            </div>
            <hr class="strong-hr">
            <div class="form-group">
                <label for="status_active" class="badge badge-success">{{__('aktiv')}}</label>
                <input name="status" type="radio" value="1"
                       id="status_active" {{ $menuItem->status == 1 ? 'checked="checked"' : '' }}>
                <label for="status_inactive" class="badge badge-danger">{{__('inaktiv')}}</label>
                <input name="status" type="radio" value="0"
                       id="status_inactive" {{ $menuItem->status == 0 ? 'checked="checked"' : '' }}>
                <label for="status_not_available" class="badge badge-warning"
                >{{__('Zur Zeit nicht erhältlich')}}</label>
                <input name="status" type="radio" value="2"
                       id="status_not_available" {{ $menuItem->status == 2 ? 'checked="checked"' : '' }}>
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="form-group col-lg-6">
                        {{Form::label('availability_info[' . $code . ']', __('Info zur Verfügbarkeit') . ' ' . __($language))}}
                        {{Form::text('availability_info[' . $code . ']', $menuItem->translate($code) ? $menuItem->translate($code)->availability_info : '', ['class' => 'form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    {{Form::label('publication', __('Anzeigen ab'))}}
                    {{Form::date('publication', $menuItem->publication, ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-lg-6">
                    {{Form::label('expiration', __('Anzeigen bis'))}}
                    {{Form::date('expiration', $menuItem->expiration, ['class' => 'form-control'])}}
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
                        {{Form::label('image', __('Bild'))}}
                        {{Form::file('image')}}
                    </div>
                </div>
            </div>

            <div class="mt-3">
                {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                    ></i> {{ __('Abbrechen') }}</a>
            </div>
            <h3 class="mt-5">{{__('Optionen')}}</h3>
            @foreach($menuItem->options as $option)
                <hr class="strong-hr">
                <div class="row my-3">
                    {{Form::hidden('option_id[]', $option->id)}}
                    @foreach(language()->allowed() as $code => $language)
                        <div class="col-md-4">
                            {{Form::label('option_name[' . $code . ']', __('Name') . ' ' . __($language))}}
                            {{Form::text('option_name[' . $code . '][]', $option->translate($code, true)->name, ['class' => 'form-control'])}}
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    @foreach(language()->allowed() as $code => $language)
                        <div class="col-lg-4">
                            {{Form::label('option_amount[' . $code . ']', __('Menge') . ' ' . __($language))}}
                            {{Form::text('option_amount[' . $code . '][]', $option->translate($code, true)->amount, ['class' => 'form-control'])}}
                        </div>
                    @endforeach
                    <div class="col-lg-4">
                        {{Form::label('option_price', __('Preis'))}}
                        {{Form::text('option_price[]', str_replace('.', ',', number_format($option->price, 2)), ['class' => 'form-control'])}}
                    </div>
                </div>
            @endforeach
            <hr class="strong-hr">
            <div class="row my-3">
                @foreach(language()->allowed() as $code => $language)
                    <div class="col-md-4">
                        {{Form::label('option_name_new[' . $code . ']', __('Name') . ' ' . __($language))}}
                        {{Form::text('option_name_new[' . $code . ']', '', ['class' => 'form-control'])}}
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="col-lg-4">
                        {{Form::label('option_amount_new[' . $code . ']', __('Menge') . ' ' . __($language))}}
                        {{Form::text('option_amount_new[' . $code . ']', '', ['class' => 'form-control'])}}
                    </div>
                @endforeach
                <div class="col-lg-4">
                    {{Form::label('option_price_new', __('Preis'))}}
                    {{Form::text('option_price_new', '', ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="mt-3">
                {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
                <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                    ></i> {{ __('Abbrechen') }}</a>
            </div>
            {{Form::hidden('_method','PUT')}}
            {!! Form::close() !!}
            {!!Form::open(['action' => ['MenuItemController@destroy', $menuItem->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('<i class="fas fa-trash-alt"></i> ' . __('Löschen'), ['class' => 'btn btn-outline-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll der Eintrag ' . $menuItem->name . ' wirklich gelöscht werden?")'])}}
            {!!Form::close()!!}
        </div>
    </div>
    </div>
    </div>
@endsection

