@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Speisekarte bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('category.create') }}" class="btn btn-danger"><i class="fas fa-list-alt"
                    ></i> {{ __('Kategorie anlegen' ) }}</a>
                <a href="{{ route('menuitem.create') }}" class="btn btn-danger"><i class="fas fa-utensils"
                    ></i> {{ __('Gericht/Getränk anlegen' ) }}</a>
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
                                <span
                                    class="badge {{ $category->publication > date('Y-m-d') || $category->expiration < date('Y-m-d') ? 'badge-danger' : 'badge-success' }} badge-pill"
                                >{{ date('d.m.y', strtotime( $category->publication )) }} - {{ date('d.m.y', strtotime( $category->expiration )) }}</span>
                            @else
                                @if( $category->publication )
                                    <span
                                        class="badge {{ $category->publication > date('Y-m-d') ? 'badge-danger' : 'badge-success' }} badge-pill"
                                    >ab {{ date('d.m.y', strtotime( $category->publication )) }}</span>
                                @endif
                                @if( $category->expiration )
                                    <span
                                        class="badge {{ $category->expiration < date('Y-m-d') ? 'badge-danger' : 'badge-success' }} badge-pill"
                                    >bis {{ date('d.m.y', strtotime( $category->expiration )) }}</span>
                                @endif
                            @endif
                        @endif
                    </h2>
                    {!! Form::open(['action' => [ 'CategoryController@moveDown', $category->id ], 'method' => 'POST' ]) !!}
                    {{Form::button('<i class="fas fa-arrow-down"></i>', ['class' => 'btn btn-outline-success float-right', 'type' => 'submit'])}}
                    {!! Form::close() !!}
                    {!! Form::open(['action' => [ 'CategoryController@moveUp', $category->id ], 'method' => 'POST' ]) !!}
                    {{Form::button('<i class="fas fa-arrow-up"></i>', ['class' => 'btn btn-outline-success float-right', 'type' => 'submit'])}}
                    {!! Form::close() !!}
                    <a href="{{ route('category.edit', $category) }}" class="btn btn-success float-right ml-2 mr-2"><i
                            class="fas fa-list-alt"
                        ></i> {{ __('Kategorie bearbeiten') }}</a>
                </div>
                <p>{!! $category->description !!}</p>
                <table class="table table-striped table-sm mb-5">
                    <thead>
                        <tr>
                            <th scope="col" style="width:40px">#</th>
                            <th scope="col" style="width:200px">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Beschreibung') }}</th>
                            <th scope="col" style="width:400px">{{ __('Optionen') }}</th>
                            <th scope="col" style="width:40px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->menuItems as $menuItem)
                            <tr>
                                <th scope="row">{{ $menuItem->sort }}</th>
                                <td>
                                    {{ $menuItem->name }}@foreach($menuItem->allergens as $allergen)<sup
                                        class="allergen" title="{{$allergen->name}}"
                                    >{{ $allergen->id }}</sup>@endforeach
                                </td>
                                <td>
                                    @foreach( $menuItem->images as $image )
                                        <img src="{{ asset('storage/img/' . $image->filename ) }}" alt="" width="100"
                                             class="img-thumbnail mr-2 float-left"
                                        />
                                    @endforeach
                                    {!! $menuItem->description !!}
                                </td>
                                <td class="admin_options_row">
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
                                </td>
                                <td>
                                    <a href="{{ route('menuitem.edit', [ $menuItem->id ]) }}"
                                       class="btn btn-sm btn-success mb-1"
                                    ><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['action' => [ 'MenuItemController@moveUp', $menuItem->id ], 'method' => 'POST' ]) !!}
                                    {{Form::button('<i class="fas fa-arrow-up"></i>', ['class' => 'btn btn-outline-success btn-sm float-right', 'type' => 'submit'])}}
                                    {!! Form::close() !!}
                                    {!! Form::open(['action' => [ 'MenuItemController@moveDown', $menuItem->id ], 'method' => 'POST' ]) !!}
                                    {{Form::button('<i class="fas fa-arrow-down"></i>', ['class' => 'btn btn-outline-success btn-sm float-right', 'type' => 'submit'])}}
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

