<?php

namespace App\Http\Controllers;

use App\Event;
use App\Image;
use App\Menu;
use Illuminate\Http\Request;

class EventController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $events = Event::orderby( 'date', 'desc' )->get();
        return view( 'event.index', compact( 'events' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'event.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $this->validate( $request, [
            'name.de' => 'required'
        ] );

        $periodically = $request->input( 'periodically' );

        $event = new Event;
        foreach( $request->input( 'name' ) as $locale => $name ) {
            $event->translateOrNew( $locale )->name = $name;
        }
        foreach( $request->input( 'description' ) as $locale => $description ) {
            $event->translateOrNew( $locale )->description = $description;
        }
        $event->date = $request->input( 'date' );
        $event->time = $request->input( 'time' );
        $event->periodically = isset( $periodically ) ? 1 : 0;
        $event->status = $request->input( 'status' );
        $event->save();

        if( $request->hasFile( 'image' ) ) {
            $image = new Image;
            $image->upload( $request );
            $event->images()->save( $image );
        }

        return redirect( '/event' )->with( 'success', __( 'Event angelegt' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function show( Event $event ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $event = Event::find( $id );
        if( !empty( $event ) ) {
            $menus = Menu::all();
            return view( 'event.edit', compact( 'event', 'menus' ) );
        } else {
            return redirect( '/event' )->with( 'error', __( 'Event nicht gefunden' ) );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $event = Event::find( $id );
        if( !empty( $event ) ) {
            $this->validate( $request, [
                'name.de' => 'required'
            ] );

            $periodically = $request->input( 'periodically' );

            foreach( $request->input( 'name' ) as $locale => $name ) {
                $event->translateOrNew( $locale )->name = $name;
            }
            foreach( $request->input( 'description' ) as $locale => $description ) {
                $event->translateOrNew( $locale )->description = $description;
            }
            $event->date = $request->input( 'date' );
            $event->time = $request->input( 'time' );
            $event->periodically = isset( $periodically ) ? 1 : 0;
            $event->status = $request->input( 'status' );
            $event->save();

            if( $request->hasFile( 'image' ) ) {
                $image = new Image;
                $image->upload( $request );
                $event->images()->save( $image );
            }

            return redirect( '/event' )->with( 'success', __( 'Event aktualisiert' ) );
        } else {
            return redirect( '/event' )->with( 'error', __( 'Event nicht gefunden' ) );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $event = Event::find( $id );

        if( !isset( $event ) ) {
            return redirect( '/event' )->with( 'error', __( 'Event nicht gefunden' ) );
        }

        $event->delete();
        return redirect( '/event' )->with( 'success', __( 'Event gelöscht' ) );
    }
}
