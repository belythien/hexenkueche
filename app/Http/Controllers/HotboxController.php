<?php

namespace App\Http\Controllers;

use App\Hotbox;
use App\Menu;
use Illuminate\Http\Request;

class HotboxController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $hotboxes = Hotbox::all();
        return view( 'hotbox.index', compact( 'hotboxes' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'hotbox.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $this->validate( $request, [
            'text' => 'required'
        ] );

        $hotbox = new Hotbox();
        foreach( $request->input( 'text' ) as $locale => $text ) {
            $hotbox->translateOrNew( $locale )->text = $text;
        }
        $hotbox->url = $request->input( 'url' );
        $hotbox->status = $request->input( 'status' );
        $hotbox->publication = $request->input( 'publication' );
        $hotbox->expiration = $request->input( 'expiration' );
        $hotbox->save();

        return redirect( route( 'hotbox.index' ) )->with( 'success', __( 'Hotbox angelegt' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $hotbox = Hotbox::find( $id );
        if( isset( $hotbox ) ) {
            return view( 'hotbox.edit', compact( 'hotbox' ) );
        } else {
            return redirect( 'hotbox.index' )->with( 'danger', __( 'Hotbox nicht gefunden' ) );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $this->validate( $request, [
            'text' => 'required'
        ] );

        $hotbox = Hotbox::find( $id );
        if( !empty( $hotbox ) ) {
            foreach( $request->input( 'text' ) as $locale => $text ) {
                $hotbox->translateOrNew( $locale )->text = $text;
            }
            $hotbox->url = $request->input( 'url' );
            $hotbox->status = $request->input( 'status' );
            $hotbox->publication = $request->input( 'publication' );
            $hotbox->expiration = $request->input( 'expiration' );
            $hotbox->save();

            return redirect( route( 'hotbox.index' ) )->with( 'success', __( 'Hotbox aktualisiert' ) );
        } else {
            return redirect( route( 'hotbox.index' ) )->with( 'danger', __( 'Hotbox nicht gefunden' ) );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $hotbox = Hotbox::find( $id );

        //Check if post exists before deleting
        if( !isset( $hotbox ) ) {
            return redirect( '/hotbox' )->with( 'error', __( 'Hotbox nicht gefunden' ) );
        }

        $hotbox->delete();
        return redirect( '/hotbox' )->with( 'success', __( 'Hotbox gelöscht' ) );
    }
}
