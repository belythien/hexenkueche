<?php

namespace App\Http\Controllers;

use App\Hotbox;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $menus = Menu::all();
        return view( 'menu.index', compact( 'menus' ) );
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //
    }

    public function removePage( $menu_id, $page_id ) {
        $menu = Menu::find( $menu_id );
        if( isset( $menu ) ) {
            $menu->pages()->detach( $page_id );
            return redirect( '/menu' )->with( 'success', 'Eintrag entfernt' );
        }
        return redirect( '/menu' )->with( 'error', 'Eintrag nicht gefunden' );
    }

    public function moveUp( $menu_id, $page_id ) {
        $menu = Menu::find( $menu_id );
        $page = $menu->pages->where( 'id', $page_id )->first();
        $sort = $page->pivot->sort;

        $menu->pages()->updateExistingPivot( $page_id, [ 'sort' => $sort - 15 ] );

        $this->updateSort( $menu );

        return redirect( '/menu' )->with( 'success', 'Reihenfolge geändert' );
    }

    public function moveDown( $menu_id, $page_id ) {
        $menu = Menu::find( $menu_id );
        $page = $menu->pages->where( 'id', $page_id )->first();
        $sort = $page->pivot->sort;

        $menu->pages()->updateExistingPivot( $page_id, [ 'sort' => $sort + 15 ] );

        $this->updateSort( $menu );

        return redirect( '/menu' )->with( 'success', 'Reihenfolge geändert' );
    }

    private function updateSort( $menu ) {
        $pages = $menu->pages()->orderBy( 'sort' )->get();

        $i = 10;
        foreach( $pages as $page ) {
            $menu->pages()->updateExistingPivot( $page->id, [ 'sort' => $i ] );
            $i += 10;
        }
    }
}
