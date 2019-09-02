@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Hotboxes bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('hotbox.create') }}" class="btn btn-danger"><i class="fas fa-plus-circle"
                    ></i> {{ __('Hotbox anlegen' ) }}</a>
            </div>
            @if(sizeof($hotboxes) == 0)
                <em>{{ __('Es sind noch keine Hotboxes angelegt') }}</em>
            @else
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('ID') }}</th>
                            <th scope="col">{{ __('Text') }}</th>
                            <th scope="col">{{ __('URL') }}</th>
                            <th scope="col">{{ __('Status') }}</th>
                            <th scope="col">{{ __('Anzeigen ab') }}</th>
                            <th scope="col">{{ __('Anzeigen bis') }}</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hotboxes as $hotbox)
                            <tr>
                                <th scope="row">
                                    {{ $hotbox->id }}
                                </th>
                                <td>{!! $hotbox->text !!}</td>
                                <td>
                                    @if( !empty($hotbox->url) )
                                        <a href="{{ url($hotbox->url) }}">{{ $hotbox->url }}</a>
                                    @endif
                                </td>
                                <td>
                                    @if( $hotbox->status == 1 )
                                        <span class="badge badge-success">{{ __('aktiv') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('inaktiv') }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($hotbox->publication))
                                        @if($hotbox->publication > date('Y-m-d') )
                                            <span class="badge badge-danger">
							                    {{ date('d.m.Y', strtotime($hotbox->publication)) }}
				                			</span>
                                        @else
                                            <span class="badge badge-success">
						                    	{{ date('d.m.Y', strtotime($hotbox->publication)) }}
						                	</span>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($hotbox->expiration))
                                        @if($hotbox->expiration < date('Y-m-d') )
                                            <span class="badge badge-danger">
							                    {{ date('d.m.Y', strtotime($hotbox->expiration)) }}
                                            </span>
                                        @else
                                            <span class="badge badge-success">
							                    {{ date('d.m.Y', strtotime($hotbox->expiration)) }}
							                </span>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    {!!Form::open(['action' => ['HotboxController@destroy', $hotbox->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                       {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::button('<i class="fas fa-trash-alt"></i>', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll Hotbox ' . $hotbox->id . ' wirklich gelöscht werden?")'])}}
                                    {!!Form::close()!!}
                                    <a class="btn btn-sm btn-success float-right"
                                       href="{{ route('hotbox.edit', [$hotbox->id]) }}"
                                    ><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
