@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Hotboxes bearbeiten') }}</h1>
        </div>
        <div class="card-body">
			<div class="text-right">
                <a href="{{ route('hotbox.create') }}" class="btn btn-danger">{{ __('Hotbox anlegen' ) }}</a>
            </div>
			<table class="table table-striped mt-3">
			  <thead>
				<tr>
				  <th scope="col">{{ __('ID') }}</th>
				  <th scope="col">{{ __('Text') }}</th>
				  <th scope="col">{{ __('URL') }}</th>
				  <th scope="col">{{ __('Status') }}</th>
				  <th scope="col">{{ __('Anzeigen ab') }}</th>
				  <th scope="col">{{ __('Anzeigen bis') }}</th>
				</tr>
			  </thead>
			  <tbody>
				@foreach($hotboxes as $hotbox)
				<tr>
				  <th scope="row">
					<a href="{{ route('hotbox.edit', [$hotbox->id]) }}">{{ $hotbox->id }}</a>
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
				</tr>
				@endforeach
			  </tbody>
			</table>
        </div>
    </div>
@endsection
