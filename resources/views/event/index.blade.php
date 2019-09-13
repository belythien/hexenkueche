@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Events') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('event.create') }}" class="btn btn-danger"><i class="fas fa-plus-circle"
                    ></i> {{ __('Event anlegen' ) }}</a>
            </div>
            @if(sizeof($events) == 0)
                <em>{{ __('Es sind noch keine Events angelegt') }}</em>
            @else
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('Event') }}</th>
                            <th scope="col">{{ __('Termin') }}</th>
                            <th scope="col">{{ __('Status') }}</th>
                            <th scope="col" style="width:100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>
                                    <h3>{{ $event->name }}</h3>
                                    {!! $event->description !!}
                                    <hr>
                                    @foreach($event->images as $image)
                                        <img src="{{ asset('storage/img/' . $image->filename ) }}" alt=""
                                             style="height: 80px"
                                             class="img-thumbnail"
                                        />
                                    @endforeach
                                </td>
                                <td>
                                    @if(!empty($event->date))
                                        {{ date( 'd.m.y', strtotime( $event->date ) ) }}<br>
                                    @endif
                                    @if(!empty($event->time))
                                        {{ date('H:i', strtotime( $event->time ) ) }}
                                    @endif
                                    @if($event->periodically == 1)
                                        <br>regelmäßig
                                    @endif
                                </td>
                                <td>
                                    @if( $event->status == 1 )
                                        <span class="badge badge-success">{{ __('aktiv') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('inaktiv') }}</span>
                                    @endif
                                </td>
                                <td>
                                    {!!Form::open(['action' => ['EventController@destroy', $event->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="fas fa-trash-alt"></i>', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit', 'onclick' => 'return confirm("Soll Event ' . $event->id . ' wirklich gelöscht werden?")'])}}
                                    {!!Form::close()!!}
                                    <a class="btn btn-sm btn-success float-right"
                                       href="{{ route('event.edit', [$event->id]) }}"
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
