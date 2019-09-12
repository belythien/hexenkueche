<?php

namespace App\Http\Controllers;

use App\Allergen;
use App\Category;
use App\Image;
use App\Menu;
use App\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MenuItem;
use App\Rules\GermanPrice;
use Intervention\Image\ImageManagerStatic as ImageMaker;

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
        $menus = Menu::all();
        $categories = Category::orderby( 'sort' )->get();
        return view( 'menuitem.index', compact( 'categories', 'menus' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $menus = Menu::all();
        $categories = Category::orderby( 'sort' )->get();
        $allergens = Allergen::all();
        return view( 'menuitem.create', compact( 'categories', 'menus', 'allergens' ) );
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

        $category_id = $request->input( 'category' )[ 0 ];

        // get next sort
        $allergens = $request->input( 'allergen' );

        $menuItem = new MenuItem;
        $menuItem->name = $request->input( 'name' );
        $menuItem->description = $request->input( 'description' );
        $menuItem->category_id = $category_id;
        $menuItem->sort = 99999;
        $menuItem->status = $request->input( 'status' );
        $menuItem->publication = $request->input( 'publication' );
        $menuItem->expiration = $request->input( 'expiration' );
        $menuItem->save();

        $menuItem->allergens()->sync( $allergens );

        if( $request->hasFile( 'image' ) ) {
            $image = new Image;
            $image->upload( $request );
            $menuItem->images()->save( $image );
        }

        for( $i = 0; $i < 10; $i++ ) {
            if( isset( $request->input( 'option_name' )[ $i ] )
                || isset( $request->input( 'option_amount' )[ $i ] )
                || isset( $request->input( 'option_price' )[ $i ] ) ) {
                $option = new Option;
                $option->name = $request->input( 'option_name' )[ $i ];
                $option->amount = $request->input( 'option_amount' )[ $i ];
                $price = (double)str_replace( ',', '.', $request->input( 'option_price' )[ $i ] );
                $option->price = $price;
                $option->save();
                $menuItem->options()->save( $option );
            }
        }

        $this->updateSort();

        return redirect( '/menuitem' )->with( 'success', 'Gericht/Getränk angelegt' );
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
        $menuItem = MenuItem::find( $id );
        $allergens = Allergen::all();
        if( isset( $menuItem ) ) {
            $menus = Menu::all();
            $categories = Category::orderby( 'sort' )->pluck( 'name', 'id' );
            return view( 'menuitem.edit', compact( 'menuItem', 'categories', 'menus', 'allergens' ) );
        } else {
            return redirect( '/menuitem' )->with( 'error', 'Eintrag nicht gefunden' );
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\menuItem $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $this->validate( $request, [
            'name'             => 'required',
            'image'            => 'image|nullable|max:16384',
            'option_price[]]'  => [ new GermanPrice ],
            'option_price_new' => [ new GermanPrice ]
        ] );

        $category_id = $request->input( 'category' )[ 0 ];
        $allergens = $request->input( 'allergen' );

        $menuItem = MenuItem::find( $id );
        if( isset( $menuItem ) ) {
            $menuItem->name = $request->input( 'name' );
            $menuItem->description = $request->input( 'description' );
            $menuItem->category_id = $category_id;
            $menuItem->status = $request->input( 'status' );
            $menuItem->allergens()->sync( $allergens );
            $menuItem->publication = $request->input( 'publication' );
            $menuItem->expiration = $request->input( 'expiration' );
            $menuItem->save();

            if( $request->hasFile( 'image' ) ) {
                $image = new Image;
                $image->upload( $request );
                $menuItem->images()->save( $image );
            }

            $options = $request->input( 'option_id' );
            if( !empty( $options ) ) {
                $i = 0;
                foreach( $options as $oid ) {
                    $option = Option::find( $oid );
                    if( empty( $request->input( 'option_name' )[ $i ] )
                        && empty( $request->input( 'option_amount' )[ $i ] )
                        && empty( $request->input( 'option_price' )[ $i ] ) ) {
                        $option->delete();
                    } else {
                        $option->name = $request->input( 'option_name' )[ $i ];
                        $option->amount = $request->input( 'option_amount' )[ $i ];

                        $price = (double)str_replace( ',', '.', $request->input( 'option_price' )[ $i ] );

                        $option->price = $price;
                        $option->save();
                    }
                    $i++;
                }
            }

            if( !empty( $request->input( 'option_name_new' ) )
                || !empty( $request->input( 'option_amount_new' ) )
                || !empty( $request->input( 'option_price_new' ) ) ) {
                $option = new Option;
                $option->name = $request->input( 'option_name_new' );
                $option->amount = $request->input( 'option_amount_new' );
                $price = (double)str_replace( ',', '.', $request->input( 'option_price_new' ) );
                $option->price = $price;
                $option->save();
                $menuItem->options()->save( $option );
            }
            $this->updateSort();
            return redirect( '/menuitem' )->with( 'success', 'Gericht aktualisiert' );
        } else {
            return redirect( '/menuitem' )->with( 'error', 'Gericht nicht gefunden' );
        }

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
        $this->updateSort();
        return redirect( '/menuitem' )->with( 'success', 'Eintrag ' . $name . ' entfernt' );
    }

    public function moveUp( $id ) {
        $menuitem = MenuItem::find( $id );

        //Check if Category exists
        if( !isset( $menuitem ) ) {
            return redirect( '/menuitem' )->with( 'error', 'Eintrag nicht gefunden' );
        }

        // get min sort of this category
        $first_menu_item_of_this_category = Category::find( $menuitem->category_id )->menuItems()->orderby( 'sort', 'asc' )->first();
        $min_sort = $first_menu_item_of_this_category->sort;

        if( $menuitem->sort > $min_sort ) {
            $menuitem->sort -= 15;
            $menuitem->save();
            $this->updateSort();

            return redirect( '/menuitem' )->with( 'success', '<strong>' . $menuitem->name . '</strong> nach oben verschoben' );
        } else {
            return redirect( '/menuitem' )->with( 'error', 'Weiter hoch geht\'s nicht...' );
        }
    }

    public function moveDown( $id ) {
        $menuitem = MenuItem::find( $id );

        //Check if Category exists
        if( !isset( $menuitem ) ) {
            return redirect( '/menuitem' )->with( 'error', 'Eintrag nicht gefunden' );
        }

        // get max sort of this category
        $category = Category::find( $menuitem->category_id );
        $last_menu_item = $category->menuitems->last();
        $max_sort = $last_menu_item->sort;

        if( $menuitem->sort < $max_sort ) {
            $menuitem->sort += 15;
            $menuitem->save();
            $this->updateSort();

            return redirect( '/menuitem' )->with( 'success', '<strong>' . $menuitem->name . '</strong> nach unten verschoben' );
        } else {
            return redirect( '/menuitem' )->with( 'error', 'Weiter runter geht\'s nicht...' );
        }
    }

    private function updateSort() {
        $categories = Category::orderby( 'sort' )->get();
        foreach( $categories as $category ) {
            $i = 10;
            foreach( $category->menuitems as $menuitem ) {
                $menuitem->sort = $category->sort * 100 + $i;
                $menuitem->save();
                $i += 10;
            }
        }
    }

    public function removeImage( $menuitem_id, $image_id ) {
        $menuitem = MenuItem::find( $menuitem_id );

        if( !isset( $menuitem ) ) {
            return redirect( '/menuitem' )->with( 'error', 'Eintrag nicht gefunden' );
        }

        $image = Image::find( $image_id );
        $menuitem->images()->detach( $image );
        return redirect( '/menuitem' )->with( 'success', 'Bild entfernt' );
    }
}
