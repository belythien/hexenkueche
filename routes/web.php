<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Hotbox;
use App\Menu;
use App\Page;

Route::get( '/', function () {
    $menus = Menu::all();
    $hotbox = Hotbox::find( 1 );
    return view( 'welcome', compact( 'menus', 'hotbox' ) );
} );

Auth::routes();

Route::get( '/speisekarte', function () {
    $page = Page::where( 'slug', 'speisekarte' )->first();
    $menus = Menu::all();
    $hotbox = $page->hotbox;
    $categories = App\Category::orderby( 'sort' )->get();
    return view( 'menu', compact( 'categories', 'page', 'hotbox', 'menus' ) );
} )->name( 'speisekarte' );

Route::group( [ 'middleware' => 'auth' ], function () {
    Route::resource( '/menuitem', 'MenuItemController' );

    Route::resource( '/category', 'CategoryController' );
    Route::post( '/category/{id}/up', 'CategoryController@moveUp' )->name( 'category_up' );
    Route::post( '/category/{id}/down', 'CategoryController@moveDown' )->name( 'category_down' );

    Route::resource( '/option', 'OptionController' );

    Route::resource( '/page', 'PageController' );

    Route::resource( '/hotbox', 'HotboxController' );
} );

Route::get( '/{slug}', function ( $slug ) {
    if( Auth::check() ) {
        $page = Page::where( 'slug', $slug )->first();
    } else {
        $page = Page::where( 'slug', $slug )->where( 'status', 1 )->first();
    }

    if( isset( $page ) ) {
        $menus = Menu::all();
        $hotbox = $page->hotbox;
        return view( 'page', compact( 'page', 'hotbox', 'menus' ) );
    } else {
        return redirect( route( 'page', [ '404' ] ) );
    }
} )->name( 'page' );
