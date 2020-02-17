<?php

namespace App\Http\Controllers;

use App\Hotbox;
use App\Image;
use App\Menu;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as ImageMaker;

class PageController extends Controller {
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
        $pages = Page::orderby( 'menu_title' )->with( 'hotbox' )->get();
        return view( 'page.index', compact( 'pages' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $hotboxes = Hotbox::pluck( 'text', 'id' );
        return view( 'page.create', compact( 'hotboxes' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $this->validate( $request, [
            'menu_title.*' => 'required',
            'title.*'      => 'required',
            'slug'         => 'required|unique:pages',
            'image'        => 'image|nullable|max:16384',
            'external_url' => 'nullable|url'
        ] );

        $hotbox_id = $request->input( 'hotbox_id' )[ 0 ];

        $page = new Page();
        foreach( $request->input( 'title' ) as $locale => $title ) {
            $page->translateOrNew( $locale )->title = $title;
        }
        foreach( $request->input( 'menu_title' ) as $locale => $menu_title ) {
            $page->translateOrNew( $locale )->menu_title = $menu_title;
        }
        foreach( $request->input( 'content' ) as $locale => $content ) {
            $page->translateOrNew( $locale )->content = $content;
        }
        $page->external_url = $request->input( 'external_url' );
        $page->slug = $request->input( 'slug' );
        $page->status = 0;
        $page->hotbox_id = $hotbox_id;
        $page->publication = $request->input( 'publication' );
        $page->expiration = $request->input( 'expiration' );
        $page->save();

        if( $request->hasFile( 'image' ) ) {
            $image = new Image;
            $image->upload( $request );
            $page->images()->save( $image );
        }

        if( !empty( $page->external_url ) ) {
            return redirect( '/page' )->with( 'info', __( 'Die Seite wurde erstellt, ist aber noch nicht aktiviert. Bitte prüfen und dann aktivieren.' ) );
        }
        return redirect( route( 'page', [ $page->slug ] ) )->with( 'info', __( 'Die Seite wurde erstellt, ist aber noch nicht aktiviert. Bitte prüfen und dann aktivieren.' ) );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Page $page
     * @return \Illuminate\Http\Response
     */
    public function show( Page $page ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit( Page $page ) {
        $hotboxes = Hotbox::pluck( 'text', 'id' );
        return view( 'page.edit', compact( 'page', 'hotboxes' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Page $page
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $this->validate( $request, [
            'menu_title.de' => 'required',
            'image'         => 'image|nullable|max:16384',
            'external_url'  => 'nullable|url'
        ] );

        $hotbox_id = $request->input( 'hotbox_id' )[ 0 ];

        $page = Page::find( $id );
        if( isset( $page ) ) {
            foreach( $request->input( 'title' ) as $locale => $title ) {
                $page->translateOrNew( $locale )->title = $title;
            }
            foreach( $request->input( 'menu_title' ) as $locale => $menu_title ) {
                $page->translateOrNew( $locale )->menu_title = $menu_title;
            }
            foreach( $request->input( 'content' ) as $locale => $content ) {
                $page->translateOrNew( $locale )->content = $content;
            }
            $page->external_url = $request->input( 'external_url' );
            $page->status = $request->input( 'status' );
            $page->hotbox_id = $hotbox_id;
            $page->publication = $request->input( 'publication' );
            $page->expiration = $request->input( 'expiration' );
            $page->save();

            if( $request->hasFile( 'image' ) ) {
                $image = new Image;
                $image->upload( $request );
                $page->images()->save( $image );
            }

            if( !empty( $page->external_url ) ) {
                return redirect( '/page' )->with( 'success', __( 'Seite aktualisiert' ) );
            }
            return redirect( route( 'page', [ $page->slug ] ) )->with( 'success', __( 'Seite aktualisiert' ) );
        } else {
            return redirect( '/page' )->with( 'danger', __( 'Seite nicht gefunden' ) );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $page = Page::find( $id );

        if( !isset( $page ) ) {
            return redirect( '/page' )->with( 'error', __( 'Seite nicht gefunden' ) );
        }

        $page->delete();
        return redirect( '/page' )->with( 'success', __( 'Seite entfernt' ) );
    }

    public function removeImage( $page_id, $image_id ) {
        $page = Page::find( $page_id );

        if( !isset( $page ) ) {
            return redirect( '/page' )->with( 'error', __( 'Seite nicht gefunden' ) );
        }

        $image = Image::find( $image_id );
        $page->images()->detach( $image );
        return redirect( route( 'page.edit', [ $page_id ] ) )->with( 'success', __( 'Bild entfernt' ) );
    }
}
