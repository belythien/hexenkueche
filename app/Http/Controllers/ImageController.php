<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Image;
use App\Menu;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $menus = Menu::all();
        $images = Image::all();
        $pages = Page::all();
        return view( 'image.index', compact( 'images', 'menus', 'pages' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        $menus = Menu::all();
        $image = Image::find( $id );
        if( isset( $image ) ) {
            return view( 'image', compact( 'image', 'menus' ) );
        }
        return redirect( '/404' );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $image = Image::find( $id );
        $pages = Page::orderby( 'menu_title' )->get();
        $events = Event::orderby( 'date', 'desc' )->get();
        $categories = Category::orderby( 'sort' )->get();
        if( !empty( $image ) ) {
            $menus = Menu::all();
            return view( 'image.edit', compact( 'image', 'pages', 'categories', 'events', 'menus' ) );
        } else {
            return redirect( '/image' )->with( 'error', __('Bild nicht gefunden') );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $image = Image::find( $id );
        if( !empty( $image ) ) {
            $this->validate( $request, [
                'name' => 'required'
            ] );

            $pages = $request->input( 'page' );
            $events = $request->input( 'event' );
            $menuitems = $request->input( 'menuitem' );

            $image->name = $request->input( 'name' );
            $image->copyright = $request->input( 'copyright' );
            $image->pages()->sync( $pages );
            $image->events()->sync( $events );
            $image->menuitems()->sync( $menuitems );
            $image->save();

            return redirect( '/image' )->with( 'success', __('Bilddaten bearbeitet') );
        } else {
            return redirect( '/image' )->with( 'error', __('Bild nicht gefunden') );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $image = Image::find( $id );

        if( !isset( $image ) ) {
            return redirect( '/image' )->with( 'error', __('Bild nicht gefunden') );
        }

        Storage::delete( $image->filename );
        $image->delete();
        return redirect( '/image' )->with( 'success', __('Bild entfernt') );
    }
}
