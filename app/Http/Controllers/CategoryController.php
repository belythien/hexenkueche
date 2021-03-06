<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
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
            'name.de' => 'required',
            'sort'    => 'integer|nullable'
        ] );

        if( empty( $request->input( 'sort' ) ) ) {
            $sort = DB::table( 'categories' )->max( 'sort' ) + 10;
        } else {
            $sort = $request->input( 'sort' );
        }

        // Create Category
        $category = new Category;
        foreach( $request->input( 'name' ) as $locale => $name ) {
            $category->translateOrNew( $locale )->name = $name;
        }
        foreach( $request->input( 'description' ) as $locale => $description ) {
            $category->translateOrNew( $locale )->description = $description;
        }
        $category->sort = $sort;
        $category->template = $request->input( 'template' )[ 0 ];
        $category->status = $request->input( 'status' );
        $category->publication = $request->input( 'publication' );
        $category->expiration = $request->input( 'expiration' );
        //$category->user_id = auth()->user()->id;
        $category->save();

        $this->updateSort();

        return redirect( '/menuitem' )->with( 'success', __( 'Kategorie angelegt' ) );
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
        return view( 'category.edit', compact( 'category' ) );
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
            'name.de' => 'required',
            'sort'    => 'integer'
        ] );

        $category = Category::find( $id );
        foreach( $request->input( 'name' ) as $locale => $name ) {
            $category->translateOrNew( $locale )->name = $name;
        }
        foreach( $request->input( 'description' ) as $locale => $description ) {
            $category->translateOrNew( $locale )->description = $description;
        }
        $category->sort = $request->input( 'sort' );
        $category->template = $request->input( 'template' )[ 0 ];
        $category->status = $request->input( 'status' );
        $category->publication = $request->input( 'publication' );
        $category->expiration = $request->input( 'expiration' );
        $category->save();

        $this->updateSort();

        return redirect( '/menuitem' )->with( 'success', __( 'Kategorie aktualisiert' ) );
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
            return redirect( '/menuitem' )->with( 'error', __( 'Kategorie nicht gefunden' ) );
        }

        $name = $category->name;
        foreach( $category->menuitems as $menuitem ) {
            $menuitem->delete();
        }

        $category->delete();
        $this->updateSort();
        return redirect( '/menuitem' )->with( 'success', __( 'Kategorie :category entfernt', [ 'category' => $name ] ) );
    }

    public function moveUp( $id ) {
        $category = Category::find( $id );

        //Check if Category exists
        if( !isset( $category ) ) {
            return redirect( '/menuitem' )->with( 'error', __( 'Kategorie nicht gefunden' ) );
        }

        if( $category->sort > 10 ) {
            $category->sort -= 15;
            $category->save();
            $this->updateSort();

            return redirect( '/menuitem' )->with( 'success', __( 'Kategorie :category nach oben verschoben', [ 'category' => $category->name ] ) );
        } else {
            return redirect( '/menuitem' )->with( 'error', __( 'Weiter hoch geht\'s nicht...' ) );
        }
    }

    public function moveDown( $id ) {
        $category = Category::find( $id );

        //Check if Category exists
        if( !isset( $category ) ) {
            return redirect( '/menuitem' )->with( 'error', __( 'Kategorie nicht gefunden' ) );
        }

        $max_sort = DB::table( 'categories' )->max( 'sort' );

        if( $category->sort < $max_sort ) {
            $category->sort += 15;
            $category->save();
            $this->updateSort();

            return redirect( '/menuitem' )->with( 'success', __( 'Kategorie :category nach unten verschoben', [ 'category' => $category->name ] ) );
        } else {
            return redirect( '/menuitem' )->with( 'error', __( 'Weiter runter geht\'s nicht...' ) );
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
