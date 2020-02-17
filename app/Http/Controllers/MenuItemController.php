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
        $categories = Category::orderby( 'sort' )->get();
        return view( 'menuitem.index', compact( 'categories' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::orderby( 'sort' )->get();
        $allergens = Allergen::all();
        return view( 'menuitem.create', compact( 'categories', 'allergens' ) );
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
            'image'   => 'image|nullable|max:16384',
            'price'   => [ new GermanPrice ]
        ] );

        $category_id = $request->input( 'category' )[ 0 ];

        // get next sort
        $allergens = $request->input( 'allergen' );

        $menuItem = new MenuItem;
        foreach( $request->input( 'name' ) as $locale => $name ) {
            $menuItem->translateOrNew( $locale )->name = $name;
        }
        foreach( $request->input( 'description' ) as $locale => $description ) {
            $menuItem->translateOrNew( $locale )->description = $description;
        }
        foreach( $request->input( 'availability_info' ) as $locale => $availability_info ) {
            $menuItem->translateOrNew( $locale )->availability_info = $availability_info;
        }
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
            if( isset( $request->input( 'option_name.de' )[ $i ] )
                || isset( $request->input( 'option_amount.de' )[ $i ] )
                || isset( $request->input( 'option_price' )[ $i ] ) ) {
                $option = new Option;
                foreach( $request->input( 'option_name' ) as $locale => $option_name ) {
                    $option->translateOrNew( $locale )->name = $option_name[ $i ];
                }
                foreach( $request->input( 'option_amount' ) as $locale => $option_amount ) {
                    $option->translateOrNew( $locale )->amount = $option_amount[ $i ];
                }

                $price = (double)str_replace( ',', '.', $request->input( 'option_price' )[ $i ] );

                $option->price = $price;
                $option->save();
                $menuItem->options()->save( $option );
            }
        }

        $this->updateSort();

        return redirect( '/menuitem' )->with( 'success', __( 'Gericht/Getränk angelegt' ) );
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
            $categories = Category::orderby( 'sort' )->get();
            return view( 'menuitem.edit', compact( 'menuItem', 'categories', 'menus', 'allergens' ) );
        } else {
            return redirect( '/menuitem' )->with( 'error', __( 'Gericht/Getränk nicht gefunden' ) );
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
            'name.de'            => 'required',
            'image'              => 'image|nullable|max:16384',
            'option_price.*.*'   => [ new GermanPrice ],
            'option_price_new.*' => [ new GermanPrice ]
        ] );
        $category_id = $request->input( 'category' )[ 0 ];
        $allergens = $request->input( 'allergen' );

        $menuItem = MenuItem::find( $id );
        if( isset( $menuItem ) ) {
            foreach( $request->input( 'name' ) as $locale => $name ) {
                $menuItem->translateOrNew( $locale )->name = $name;
            }
            foreach( $request->input( 'description' ) as $locale => $description ) {
                $menuItem->translateOrNew( $locale )->description = $description;
            }
            foreach( $request->input( 'availability_info' ) as $locale => $availability_info ) {
                $menuItem->translateOrNew( $locale )->availability_info = $availability_info;
            }
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
                    if( empty( $request->input( 'option_name.de' )[ $i ] )
                        && empty( $request->input( 'option_amount.de' )[ $i ] )
                        && empty( $request->input( 'option_price' )[ $i ] ) ) {
                        $option->delete();
                    } else {
                        foreach( $request->input( 'option_name' ) as $locale => $option_name ) {
                            $option->translateOrNew( $locale )->name = $option_name[ $i ];
                        }
                        foreach( $request->input( 'option_amount' ) as $locale => $option_amount ) {
                            $option->translateOrNew( $locale )->amount = $option_amount[ $i ];
                        }

                        $price = (double)str_replace( ',', '.', $request->input( 'option_price' )[ $i ] );

                        $option->price = $price;
                        $option->save();
                    }
                    $i++;
                }
            }

            if( !empty( $request->input( 'option_name_new.de' ) )
                || !empty( $request->input( 'option_amount_new.de' ) )
                || !empty( $request->input( 'option_price_new' ) ) ) {
                $option = new Option;

                foreach( $request->input( 'option_name_new' ) as $locale => $option_name ) {
                    $option->translateOrNew( $locale )->name = $option_name;
                }
                foreach( $request->input( 'option_amount_new' ) as $locale => $option_amount ) {
                    $option->translateOrNew( $locale )->amount = $option_amount;
                }
                $price = (double)str_replace( ',', '.', $request->input( 'option_price_new' ) );
                $option->price = $price;
                $option->save();

                $menuItem->options()->save( $option );
            }

            $this->updateSort();
            return redirect( '/menuitem' )->with( 'success', __( 'Gericht/Getränk aktualisiert' ) );
        } else {
            return redirect( '/menuitem' )->with( 'error', __( 'Gericht/Getränk nicht gefunden' ) );
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
            return redirect( '/menuitem' )->with( 'error', __( 'Gericht/Getränk nicht gefunden' ) );
        }

        $name = $menuItem->name;
        foreach( $menuItem->options as $option ) {
            $option->delete();
        }
        $menuItem->delete();
        $this->updateSort();
        return redirect( '/menuitem' )->with( 'success', __( 'Gericht/Getränk entfernt' ) );
    }

    public function moveUp( $id ) {
        $menuitem = MenuItem::find( $id );

        //Check if Category exists
        if( !isset( $menuitem ) ) {
            return redirect( '/menuitem' )->with( 'error', __( 'Gericht/Getränk nicht gefunden' ) );
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
            return redirect( '/menuitem' )->with( 'error', __( 'Weiter hoch geht\'s nicht...' ) );
        }
    }

    public function moveDown( $id ) {
        $menuitem = MenuItem::find( $id );

        //Check if Category exists
        if( !isset( $menuitem ) ) {
            return redirect( '/menuitem' )->with( 'error', __( 'Gericht/Getränk nicht gefunden' ) );
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
            return redirect( '/menuitem' )->with( 'error', __( 'Weiter runter geht\'s nicht...' ) );
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
            return redirect( '/menuitem' )->with( 'error', __( 'Gericht/Getränk nicht gefunden' ) );
        }

        $image = Image::find( $image_id );
        $menuitem->images()->detach( $image );
        return redirect( '/menuitem' )->with( 'success', __( 'Bild entfernt' ) );
    }
}
