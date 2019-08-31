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
    $hotbox = \App\Hotbox::find( 1 );
    return view( 'welcome', compact( 'hotbox' ) );
} );

Auth::routes();

Route::get( '/speisekarte', function () {
    $page = \App\Page::where( 'slug', 'speisekarte' )->first();
    $hotbox = $page->hotbox;
    $categories = App\Category::orderby( 'sort' )->get();
    return view( 'menu', compact( 'categories', 'page', 'hotbox' ) );
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
