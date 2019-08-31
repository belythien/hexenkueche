<?php

namespace App\Http\Controllers;

use App\Hotbox;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
		$pages = Page::orderby('menu_title')->with('hotbox')->get();
		$primary_menu = \App\Menu::find(2);
		$footer_menu = \App\Menu::find(3);
		return view( 'page.index', compact( 'pages', 'primary_menu', 'footer_menu' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
		$primary_menu = \App\Menu::find(2);
		$footer_menu = \App\Menu::find(3);
		$hotboxes = Hotbox::all();
        return view( 'page.create', compact('hotboxes', 'primary_menu', 'footer_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $this->validate( $request, [
            'menu_title' => 'required',
			'slug' => 'required|unique:pages'
        ] );

		$hotbox_id = $request->input( 'hotbox_id' )[ 0 ];

        $page = new Page();
		$page->title = $request->input( 'title' );
		$page->menu_title = $request->input( 'menu_title' );
		$page->content = $request->input( 'content' );
		$page->slug = $request->input( 'slug' );
		$page->status = 0;
		$page->hotbox_id = $hotbox_id;
		$page->publication = $request->input( 'publication' );
		$page->expiration = $request->input( 'expiration' );
		$page->save();

		return redirect( route('page', [$page->slug]) )->with( 'info', 'Die Seite wurde erstellt, ist aber noch nicht aktiviert. Bitte prüfen und dann aktivieren.' );

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
		$primary_menu = \App\Menu::find(2);
		$footer_menu = \App\Menu::find(3);
		$hotboxes = Hotbox::all();
        return view( 'page.edit', compact('page', 'hotboxes', 'primary_menu', 'footer_menu') );
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
            'menu_title' => 'required'
        ] );

		$hotbox_id = $request->input( 'hotbox_id' )[ 0 ];

        $page = Page::find( $id );
		if(isset($page)) {
			$page->title = $request->input( 'title' );
			$page->menu_title = $request->input( 'menu_title' );
			$page->content = $request->input( 'content' );
			$page->status = $request->input( 'status' );
			$page->hotbox_id = $hotbox_id;
			$page->publication = $request->input( 'publication' );
			$page->expiration = $request->input( 'expiration' );
			$page->save();

			return redirect( route('page', [$page->slug]) )->with( 'success', 'Seite aktualisiert' );
		} else {
			return redirect( '/page' )->with( 'danger', 'Ein Fehler ist aufgetreten' );
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy( Page $page ) {
        //
    }

    public function view( $slug ) {
		if(Auth::check()) {
			$page = Page::where( 'slug', $slug )->first();
		} else {
			$page = Page::where( 'slug', $slug )->where( 'status', 1 )->first();
		}
        
        if( isset( $page ) ) {
			$primary_menu = \App\Menu::find(2);
			$footer_menu = \App\Menu::find(3);
            $hotbox = $page->hotbox;
            return view( 'page', compact( 'page', 'hotbox', 'primary_menu', 'footer_menu' ) );
        } else {
            return redirect( route( 'page', [ '404' ] ) );
        }

    }
}
