<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MenuItem;
use App\Rules\GermanPrice;
use Intervention\Image\ImageManagerStatic as Image;

class MenuItemController extends Controller {
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
        $menus = \App\Menu::all();
        $categories = Category::orderby( 'sort' )->get();
        return view( 'menuitem.index', compact( 'categories', 'menus' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $menus = \App\Menu::all();
        $categories = Category::orderby( 'sort' )->get();
        return view( 'menuitem.create', compact( 'categories', 'menus' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $this->validate( $request, [
            'name'  => 'required',
            'image' => 'image|nullable|max:16384',
            'price' => [ new GermanPrice ]
        ] );

        // get next sort
        $sort = DB::table( 'menu_items' )->max( 'sort' ) + 10;

        $price = (double)str_replace( ',', '.', $request->input( 'price' ) );

        // Handle File Upload
        if( $request->hasFile( 'image' ) ) {
            // Get filename with the extension
            $filenameWithExt = $request->file( 'image' )->getClientOriginalName();
            // Get just filename
            $filename = pathinfo( $filenameWithExt, PATHINFO_FILENAME );
            // Get just ext
            $extension = $request->file( 'image' )->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            //$path = $request->file('image')->storeAs('public/images', $fileNameToStore);

            $img_resize = Image::make( $request->file( 'image' )->getRealPath() );
            $img_resize->widen( 800 );
            $img_resize->save( public_path( 'storage\\images\\' . $fileNameToStore ) );
        } else {
            $fileNameToStore = '';
        }

        $category_id = $request->input( 'category' )[ 0 ];

        // Create MenuItem
        $menuItem = new MenuItem;
        $menuItem->name = $request->input( 'name' );
        $menuItem->description = $request->input( 'description' );
        $menuItem->price = $price;
        $menuItem->category_id = $category_id;
        $menuItem->sort = $sort;
        $menuItem->image = $fileNameToStore;
        $menuItem->publication = $request->input( 'publication' );
        $menuItem->expiration = $request->input( 'expiration' );
        $menuItem->save();

        return redirect( '/menuitem' )->with( 'success', 'Speise angelegt' );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\menuItem $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show( menuItem $menuItem ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\menuItem $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $menuItem = MenuItem::find($id);
        if(isset($menuItem)) {
            $menus = \App\Menu::all();
            $categories = Category::orderby( 'sort' )->pluck('name', 'id');
            return view( 'menuitem.edit', compact( 'menuItem', 'categories', 'menus' ) );
        } else {
            return redirect('/menuitem')->with('error', 'Eintrag nicht gefunden');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\menuItem $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, menuItem $menuItem ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\menuItem $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $menuItem = MenuItem::find( $id );

        if( !isset( $menuItem ) ) {
            return redirect( '/menuitem' )->with( 'error', 'Eintrag nicht gefunden' );
        }

        $name = $menuItem->name;
        $menuItem->delete();
        return redirect( '/menuitem' )->with( 'success', 'Eintrag ' . $name . ' entfernt' );
    }

}
