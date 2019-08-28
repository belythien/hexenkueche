@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Gericht bearbeiten') }}</div>
            <div class="card-body">
                @foreach($categories as $category)
                <h2>{{ $category->sort }}) {{ $category->name }} <a href="#" class="btn btn-sm btn-success float-right">{{ __('Bearbeiten') }}</a></h2>
                <p>{!! $category->description !!}</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width:40px">#</th>
                            <th scope="col" style="width:200px">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Beschreibung') }}</th>
                            <th scope="col" style="width:200px">{{ __('Preis') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->menuItems as $menuItem)
                        <tr>
                            <th scope="row">{{ $menuItem->sort }}</th>
                            <td>{{ $menuItem->name }}</td>
                            <td>{{ $menuItem->description }}</td>
                            <td>
                                @if( sizeof( $menuItem->options ) > 0 )
                                    @foreach( $menuItem->options as $option )
                                     <div>{{ $option->name }} {{ number_format($option->price, 2) }}€</div>
                                    @endforeach
                                @else
                                    {{ number_format($menuItem->price, 2) }}€
                                @endif
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

