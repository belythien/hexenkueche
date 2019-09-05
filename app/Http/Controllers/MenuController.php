<?php

namespace App\Http\Controllers;

use App\Hotbox;
use App\Menu;
use App\Page;
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

    public function addPage( Request $request, $menu_id ) {
        $menu = Menu::find( $menu_id );
        $page = Page::find( $request->input( 'page' )[ 0 ] );
        if( isset( $menu, $page ) ) {
            $menu->pages()->save( $page );
            $this->updateSort( $menu );
            return redirect( '/menu' )->with( 'success', 'Eintrag entfernt' );
        }
        return redirect( '/menu' )->with( 'error', 'Eintrag nicht gefunden' );
    }

    public function removePage( $menu_id, $page_id ) {
        $menu = Menu::find( $menu_id );
        if( isset( $menu ) ) {
            $menu->pages()->detach( $page_id );
            $this->updateSort( $menu );
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
