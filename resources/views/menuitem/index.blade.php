@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Speisekarte bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('category.create') }}" class="btn btn-danger">{{ __('Kategorie anlegen' ) }}</a>
                <a href="{{ route('menuitem.create') }}" class="btn btn-danger">{{ __('Gericht/Getränk anlegen' ) }}</a>
            </div>
            <hr>
            @foreach($categories as $category)
                <div class="form-group mb-3 clearfix {{ $category->status == 0 ? 'inactive' : '' }}">
                    <h2 class="float-left">
                        {{ $category->sort / 10 }}) {{ $category->name }}
                        @if( $category->status == 0 )
                            <span class="badge badge-danger">{{ __('Inaktiv') }}</span>
                        @else
                            @if( $category->publication && $category->expiration )
                                <span class="badge {{ $category->publication > date('Y-m-d') || $category->expiration < date('Y-m-d') ? 'badge-danger' : 'badge-success' }} badge-pill">{{ date('d.m.y', strtotime( $category->publication )) }} - {{ date('d.m.y', strtotime( $category->expiration )) }}</span>
                            @else
                                @if( $category->publication )
                                    <span class="badge {{ $category->publication > date('Y-m-d') ? 'badge-danger' : 'badge-success' }} badge-pill">ab {{ date('d.m.y', strtotime( $category->publication )) }}</span>
                                @endif
                                @if( $category->expiration )
                                    <span class="badge {{ $category->expiration < date('Y-m-d') ? 'badge-danger' : 'badge-success' }} badge-pill">bis {{ date('d.m.y', strtotime( $category->expiration )) }}</span>
                                @endif
                            @endif
                        @endif
                    </h2>
                    {!! Form::open(['action' => [ 'CategoryController@moveDown', $category->id ], 'method' => 'POST' ]) !!}
                        {{Form::submit('▼', ['class' => 'btn btn-outline-success float-right'])}}
                    {!! Form::close() !!}
                    {!! Form::open(['action' => [ 'CategoryController@moveUp', $category->id ], 'method' => 'POST' ]) !!}
                        {{Form::submit('▲', ['class' => 'btn btn-outline-success float-right'])}}
                    {!! Form::close() !!}
                    <a href="{{ route('category.edit', $category) }}" class="btn btn-success float-right ml-2">{{ __('Kategorie bearbeiten') }}</a>
                </div>
                <p>{!! $category->description !!}</p>
                <table class="table table-striped table-sm mb-5">
                    <thead>
                        <tr>
                            <th scope="col" style="width:40px">#</th>
                            <th scope="col" style="width:200px">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Beschreibung') }}</th>
                            <th scope="col" style="width:300px">{{ __('Optionen') }}</th>
                            <th scope="col" style="width:40px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->menuItems as $menuItem)
                        <tr>
                            <th scope="row">{{ $menuItem->sort }}</th>
                            <td>
                                {{ $menuItem->name }}
                            </td>
                            <td>
                                @if( $menuItem->image )
                                    <img src="{{ asset('storage/images/' . $menuItem->image ) }}" alt="" width="100" class="img-thumbnail mr-2 float-left" />
                                @endif
                                {!! $menuItem->description !!}
                            </td>
                            <td class="admin_options_row">
{{--                                @if( sizeof( $menuItem->options ) > 0 )--}}
                                    @foreach( $menuItem->options as $option )
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! $option->name !!}
                                            </div>
                                            <div class="col-md-3">
                                                {{ $option->amount }}
                                            </div>
                                            <div class="col-md-3">
                                                {{ str_replace('.', ',', number_format($option->price, 2)) }}€
                                            </div>
                                        </div>
                                    @endforeach
{{--                                @else--}}
{{--                                    @if( $menuItem->amount ) --}}
{{--                                        {!! $menuItem->amount !!}--}}
{{--                                    @endif--}}
{{--                                    <strong>{{ str_replace('.', ',', number_format($menuItem->price, 2)) }}€</strong>--}}
{{--                                @endif--}}
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-success mb-1">{{ __('Bearbeiten') }}</a>
                                {!! Form::open(['action' => [ 'CategoryController@moveDown', $category->id ], 'method' => 'POST' ]) !!}
                                    {{Form::submit('▼', ['class' => 'btn btn-outline-success btn-sm float-right'])}}
                                {!! Form::close() !!}
                                {!! Form::open(['action' => [ 'CategoryController@moveUp', $category->id ], 'method' => 'POST' ]) !!}
                                    {{Form::submit('▲', ['class' => 'btn btn-outline-success btn-sm float-right'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
        </div>
    </div>
</div>
@endsection

