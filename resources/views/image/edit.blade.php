@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Bilddaten bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="/storage/img/{{ $image->filename }}" class="img-thumbnail" />
                </div>
                <div class="col-md-9">
                    {!! Form::open([ 'action' => ['ImageController@update', $image->id], 'method' => 'POST' ]) !!}
                    @foreach(language()->allowed() as $code => $language)
                        <div class="form-group">
                            {{Form::label('name[' . $code . ']', __('Name') . ' ' . __($language))}}
                            {{Form::text('name[' . $code . ']', $image->translate($code) ? $image->translate($code)->name : '', ['class' => 'form-control'])}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            {{Form::label('description[' . $code . ']', __('Beschreibung') . ' ' . __($language))}}
                            {{Form::textarea('description[' . $code . ']', $image->translate($code) ? $image->translate($code)->description : '', ['class' => 'text-ckeditor form-control'])}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach(language()->allowed() as $code => $language)
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            {{Form::label('copyright[' . $code . ']', __('Copyright') . ' ' . __($language))}}
                            {{Form::textarea('copyright[' . $code . ']', $image->translate($code) ? $image->translate($code)->copyright : '', ['class' => 'text-ckeditor form-control'])}}
                        </div>
                    </div>
                @endforeach
            </div>
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            <hr class="strong-hr">
            <h2>{{__('Seiten')}}</h2>
            <div class="form-group row">
                @foreach($pages as $page)
                    <div class="col-md-4">
                        {{Form::checkbox('page[]', $page->id, (in_array($page->id, $image->pages->pluck('id')->toArray()) ? true : false )) }}
                        {{Form::label('page', $page->menu_title)}}
                    </div>
                @endforeach
            </div>
            <hr class="strong-hr">
            <h2>{{__('Events')}}</h2>
            <div class="form-group row">
                @foreach($events as $event)
                    <div class="col-md-6">
                        {{Form::checkbox('event[]', $event->id, (in_array($event->id, $image->events->pluck('id')->toArray()) ? true : false )) }}
                        @if(!empty($event->date))
                            {{Form::label('event', date('d.m.Y', strtotime($event->date)) . ' ' . $event->name)}}
                        @else
                            {{Form::label('event', $event->name)}}
                        @endif
                    </div>
                @endforeach
            </div>
            <hr class="strong-hr">
            <h2>{{__('Gerichte/Getränke')}}</h2>
            <div class="form-group">
                @foreach($categories as $category)
                    <h3 class="mt-2">{{ $category->name }}</h3>
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
            {{Form::button('<i class="fas fa-save"></i> ' . __('Speichern'), ['class'=>'btn btn-danger', 'type' => 'submit'])}}
            <a href="{{ url()->previous() }}" class="btn btn-success"><i class="fas fa-times-circle"
                ></i> {{ __('Abbrechen') }}</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
