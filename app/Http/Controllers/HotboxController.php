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
        $menus = Menu::all();
        $hotboxes = Hotbox::all();
        return view( 'hotbox.index', compact( 'hotboxes', 'menus' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $menus = Menu::all();
        return view( 'hotbox.create', compact( 'menus' ) );
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
        $hotbox->text = $request->input( 'text' );
        $hotbox->url = $request->input( 'url' );
        $hotbox->status = $request->input( 'status' );
        $hotbox->publication = $request->input( 'publication' );
        $hotbox->expiration = $request->input( 'expiration' );
        $hotbox->save();

        return redirect( route( 'hotbox.index' ) )->with( 'success', 'Hotbox angelegt' );
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
        $menus = Menu::all();
        $hotbox = Hotbox::find( $id );
        if( isset( $hotbox ) ) {
            return view( 'hotbox.edit', compact( 'hotbox', 'menus' ) );
        } else {
            return redirect( 'hotbox.index' )->with( 'danger', 'Hotbox nicht gefunden' );
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
        if( isset( $hotbox ) ) {
            $hotbox->text = $request->input( 'text' );
            $hotbox->url = $request->input( 'url' );
            $hotbox->status = $request->input( 'status' );
            $hotbox->publication = $request->input( 'publication' );
            $hotbox->expiration = $request->input( 'expiration' );
            $hotbox->save();

            return redirect( route( 'hotbox.index' ) )->with( 'success', 'Hotbox aktualisiert' );
        } else {
            return redirect( route( 'hotbox.index' ) )->with( 'danger', 'Ein Fehler ist aufgetreten' );
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
            return redirect( '/hotbox' )->with( 'error', 'Hotbox nicht gefunden' );
        }

        $hotbox->delete();
        return redirect( '/hotbox' )->with( 'success', 'Hotbox entfernt' );
    }
}
