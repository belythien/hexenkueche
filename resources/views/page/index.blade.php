@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ __('Seiten bearbeiten') }}</h1>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('page.create') }}" class="btn btn-danger"><i class="fas fa-plus-circle"
                    ></i> {{ __('Seite anlegen' ) }}</a>
            </div>
            <table class="table table-striped table-sm mt-3">
                <thead>
                    <tr>
                        <th scope="col">{{ __('Titel (kurz)') }}</th>
                        <th scope="col">{{ __('Inhalt') }}</th>
                        <th scope="col">{{ __('Hotbox') }}</th>
                        <th scope="col">{{ __('Status') }}</th>
                        <th scope="col">{{ __('Anzeigen ab') }}</th>
                        <th scope="col">{{ __('Anzeigen bis') }}</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <th scope="row">
                                <a href="{{ route('page.edit', [$page->id]) }}">{{ $page->menu_title }}</a>
                            </th>
                            <td>
                                @if(!empty($page->external_url))
                                    <a href="{{ $page->external_url }}" target="_blank">{{ $page->external_url }}</a>
                                @else
                                    {{ \Illuminate\Support\Str::limit(strip_tags($page->content), 50, '...') }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($page->hotbox))
                                    <a href="{{ route('hotbox.edit', [ $page->hotbox_id ])}}"
                                       class="badge badge-danger"
                                    >{{ $page->hotbox_id }}</a>
                                    {!! $page->hotbox->text !!}
                                @endif
                            </td>
                            <td>
                                @if( $page->status == 1 )
                                    <span class="badge badge-success">{{ __('aktiv') }}</span>
                                @else
                                    <span class="badge badge-danger">{{ __('inaktiv') }}</span>
                                @endif
                            </td>
                            <td>
                                @if(!empty($page->publication))
                                    @if($page->publication > date('Y-m-d') )
                                        <span class="badge badge-danger">
							{{ date('d.m.Y', strtotime($page->publication)) }}
							</span>
                                    @else
                                        <span class="badge badge-success">
							{{ date('d.m.Y', strtotime($page->publication)) }}
							</span>
                                    @endif
                                @endif
                            </td>
                            <td>
                                @if(!empty($page->expiration))
                                    @if($page->expiration < date('Y-m-d') )
                                        <span class="badge badge-danger">
							{{ date('d.m.Y', strtotime($page->expiration)) }}
							</span>
                                    @else
                                        <span class="badge badge-success">
							{{ date('d.m.Y', strtotime($page->expiration)) }}
							</span>
                                    @endif
                                @endif
                            </td>
                            <td style="width:100px">
                                <a class="btn btn-sm btn-success float-right"
                                   href="{{ route('page.edit', [$page->id]) }}"
                                ><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
