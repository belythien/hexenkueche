<?php

namespace App\Http\Controllers;

use App\Allergen;
use App\Menu;
use Illuminate\Http\Request;

class AllergenController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $allergens = Allergen::all();
        $menus = Menu::all();
        return view( 'allergen.index', compact( 'allergens', 'menus' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $menus = Menu::all();
        return view( 'allergen.create', compact( 'menus' ) );
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

        $allergen = new Allergen;
        foreach( $request->input( 'name' ) as $locale => $name ) {
            $allergen->translateOrNew( $locale )->name = $name;
        }
        $allergen->save();

        return redirect( '/allergen' )->with( 'success', __('Allergen angelegt') );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Allergen $allergen
     * @return \Illuminate\Http\Response
     */
    public function show( Allergen $allergen ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Allergen $allergen
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $allergen = Allergen::find( $id );

        if( !empty( $allergen ) ) {
            return view( 'allergen.edit', compact( 'allergen' ) );
        } else {
            return view( 'allergen.index' )->with( 'error', __('Allergen nicht gefunden') );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Allergen $allergen
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $allergen = Allergen::find( $id );
        if( !empty( $allergen ) ) {
            $this->validate( $request, [
                'name.de' => 'required'
            ] );

            foreach( $request->input( 'name' ) as $locale => $name ) {
                $allergen->translateOrNew( $locale )->name = $name;
            }
            $allergen->save();
            return redirect( '/allergen' )->with( 'success', __('Allergen aktualisiert') );
        } else {
            return view( 'allergen.index' )->with( 'error', __('Allergen nicht gefunden') );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Allergen $allergen
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $allergen = Allergen::find( $id );
        if( !empty( $allergen ) ) {
            $allergen->menuitems()->detach();
            $allergen->delete();
            return redirect( '/allergen' )->with( 'success', __('Allergen gelöscht') );
        } else {
            return view( 'allergen.index' )->with( 'error', __('Allergen nicht gefunden') );
        }
    }
}
