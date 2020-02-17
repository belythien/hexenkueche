<?php

namespace App\Http\Controllers;

//use App\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $keywords = Keyword::all();
        return view( 'keyword.index', [ 'keywords' => $keywords ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'keyword.create' );
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

        $keyword = new Keyword;
        foreach( $request->input( 'name' ) as $locale => $name ) {
            $keyword->translateOrNew( $locale )->name = $name;
        }
        $keyword->save();

        return redirect( '/keyword' )->with( 'success', __( 'Keyword angelegt' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Keyword $keyword
     * @return \Illuminate\Http\Response
     */
    public function show( Keyword $keyword ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Keyword $keyword
     * @return \Illuminate\Http\Response
     */
    public function edit( Keyword $keyword ) {
        return view( 'keyword.edit', [ 'keyword' => $keyword ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Keyword $keyword
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Keyword $keyword ) {
        $this->validate( $request, [
            'name.de' => 'required'
        ] );
        foreach( $request->input( 'name' ) as $locale => $name ) {
            $keyword->translateOrNew( $locale )->name = $name;
        }
        $keyword->save();
        return redirect( '/keyword' )->with( 'success', __( 'Keyword aktualisiert' ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Keyword $keyword
     * @return \Illuminate\Http\Response
     */
    public function destroy( Keyword $keyword ) {
        $keyword->delete();
        return redirect( '/keyword' )->with( 'success', __( 'Keyword gelöscht' ) );
    }
}
