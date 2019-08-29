<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware( 'auth' );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'category.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $this->validate( $request, [
            'name' => 'required'
        ] );

        // get next sort
        $sort = DB::table( 'categories' )->max( 'sort' ) + 10;

        // Create Category
        $category = new Category;
        $category->name = $request->input( 'name' );
        $category->description = $request->input( 'description' );
        $category->sort = $sort;
        $category->publication = $request->input( 'publication' );
        $category->expiration = $request->input( 'expiration' );
        //$category->user_id = auth()->user()->id;
        $category->save();

        return redirect( '/menuitem' )->with( 'success', 'Kategorie angelegt' );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function show( category $category ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit( category $category ) {
        return view( 'category.edit' )->with( 'category', $category );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $this->validate( $request, [
            'name' => 'required'
        ] );

        $category = Category::find( $id );
        $category->name = $request->input( 'name' );
        $category->description = $request->input( 'description' );
        $category->publication = $request->input( 'publication' );
        $category->expiration = $request->input( 'expiration' );
        $category->save();

        return redirect( '/menuitem' )->with( 'success', 'Kategorie aktualisiert' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $category = Category::find( $id );

        //Check if post exists before deleting
        if( !isset( $category ) ) {
            return redirect( '/menuitem' )->with( 'error', 'Kategorie nicht gefunden' );
        }

        $category->delete();
        return redirect( '/menuitem' )->with( 'success', 'Kategorie entfernt' );
    }

    public function moveUp( $id ) {
        $category = Category::find( $id );

        //Check if Category exists
        if( !isset( $category ) ) {
            return redirect( '/menuitem' )->with( 'error', 'Kategorie nicht gefunden' );
        }

        if( $category->sort > 10 ) {
            $category->sort -= 15;
            $category->save();
            $this->updateSort();

            return redirect( '/menuitem' )->with( 'success', 'Kategorie <strong>' . $category->name . '</strong> nach oben verschoben' );
        } else {
            return redirect( '/menuitem' )->with( 'error', 'Weiter hoch geht\'s nicht...' );
        }
    }

    public function moveDown( $id ) {
        $category = Category::find( $id );

        //Check if Category exists
        if( !isset( $category ) ) {
            return redirect( '/menuitem' )->with( 'error', 'Kategorie nicht gefunden' );
        }

        $max_sort = DB::table( 'categories' )->max( 'sort' );

        if( $category->sort < $max_sort ) {
            $category->sort += 15;
            $category->save();
            $this->updateSort();

            return redirect( '/menuitem' )->with( 'success', 'Kategorie <strong>' . $category->name . '</strong> nach unten verschoben' );
        } else {
            return redirect( '/menuitem' )->with( 'error', 'Weiter runter geht\'s nicht...' );
        }
    }

    private function updateSort() {
        $categories = Category::orderby( 'sort' )->get();
        $i = 10;
        foreach( $categories as $category ) {
            $category->sort = $i;
            $i += 10;
            $category->save();
        }
    }
}
