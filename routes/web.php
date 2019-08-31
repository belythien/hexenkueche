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

Route::get( '/', function () {
	$menu = \App\Menu::find(1);
    $hotbox = \App\Hotbox::find( 1 );
    return view( 'welcome', compact( 'menu', 'hotbox' ) );
} );

Auth::routes();

Route::get( '/speisekarte', function () {
    $page = \App\Page::where( 'slug', 'speisekarte' )->first();
	$primary_menu = \App\Menu::find(2);
	$footer_menu = \App\Menu::find(3);
    $hotbox = $page->hotbox;
    $categories = App\Category::orderby( 'sort' )->get();
    return view( 'menu', compact( 'categories', 'page', 'hotbox', 'primary_menu', 'footer_menu' ) );
} )->name( 'speisekarte' );

Route::group( [ 'middleware' => 'auth' ], function () {
    Route::resource( '/menuitem', 'MenuItemController' );

    Route::resource( '/category', 'CategoryController' );
    Route::post( '/category/{id}/up', 'CategoryController@moveUp' )->name( 'category_up' );
    Route::post( '/category/{id}/down', 'CategoryController@moveDown' )->name( 'category_down' );

    Route::resource( '/option', 'OptionController' );
	
	Route::resource( '/page', 'PageController' );
} );

Route::get( '/{slug}', 'PageController@view' )->name( 'page' );
