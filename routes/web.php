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

use App\Allergen;
use App\Event;
use App\Hotbox;
use App\Menu;
use App\Page;

Route::group( [ 'middleware' => 'language' ], function () {
    Route::get( '/', function () {
        $menus = Menu::all();
        $hotbox = Hotbox::find( 1 );
        return view( 'welcome', compact( 'menus', 'hotbox' ) );
    } );

    Auth::routes( [ 'register' => false ] );

    Route::get( '/speisekarte', function () {
        $page = Page::where( 'slug', 'speisekarte' )->first();
        $menus = Menu::all();
        $allergens = Allergen::all();
        $hotbox = $page->hotbox;
        $categories = App\Category::orderby( 'sort' )->get();
        return view( 'menu', compact( 'categories', 'page', 'hotbox', 'menus', 'allergens' ) );
    } )->name( 'speisekarte' );

    Route::get( '/events', function () {
        $page = Page::where( 'slug', 'events' )->first();
        $events = Event::orderby( 'date', 'desc' )->get();
        $menus = Menu::all();
        return view( 'events', compact( 'page', 'events', 'menus' ) );
    } )->name( 'events' );

    Route::get( '/image/{id}', 'ImageController@show' )->name( 'image.show' );

    Route::group( [ 'middleware' => 'auth' ], function () {
        Route::resource( '/menuitem', 'MenuItemController' );
        Route::post( '/menuitem/{id}/up', 'MenuItemController@moveUp' )->name( 'menuitem_up' );
        Route::post( '/menuitem/{id}/down', 'MenuItemController@moveDown' )->name( 'menuitem_down' );
        Route::delete( '/menuitem/{menuitem_id}/image/{image_id}', 'MenuItemController@removeImage' )->name( 'menuitem_remove_image' );

        Route::resource( '/category', 'CategoryController' );
        Route::post( '/category/{id}/up', 'CategoryController@moveUp' )->name( 'category_up' );
        Route::post( '/category/{id}/down', 'CategoryController@moveDown' )->name( 'category_down' );

        Route::resource( '/event', 'EventController' );

        Route::resource( '/allergen', 'AllergenController' );

        Route::resource( '/image', 'ImageController' );

        Route::resource( '/option', 'OptionController' );

        Route::resource( '/page', 'PageController' );
        Route::delete( '/page/{page_id}/image/{image_id}', 'PageController@removeImage' )->name( 'page_remove_image' );

        Route::resource( '/hotbox', 'HotboxController' );

        Route::get( '/menu', 'MenuController@index' )->name( 'menu.index' );
        Route::delete( '/menu/{menu_id}/page/{page_id}', 'MenuController@removePage' )->name( 'menu_remove_page' );
        Route::post( '/menu/{menu_id}/page', 'MenuController@addPage' )->name( 'menu_add_page' );
        Route::post( '/menu/{menu_id}/page/{page_id}/up', 'MenuController@moveUp' )->name( 'menu_page_up' );
        Route::post( '/menu/{menu_id}/page/{page_id}/down', 'MenuController@moveDown' )->name( 'menu_page_down' );


        Route::post( 'ckeditor/image_upload', 'CKEditorController@upload' )->name( 'upload' );
    } );

    Route::get( '/{slug}', function ( $slug ) {
        $page = Page::where( 'slug', $slug )->first();

        if( isset( $page ) && ( $page->isLive() || Auth::check() ) ) {
            $menus = Menu::all();
            $hotbox = $page->hotbox;
            return view( 'page', compact( 'page', 'hotbox', 'menus' ) );
        } else {
            return redirect( route( 'page', [ '404' ] ) );
        }
    } )->name( 'page' );
} );
