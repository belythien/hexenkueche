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
    return view( 'welcome', compact('hotbox') );
} );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

Route::get( '/speisekarte', function () {
    $hotbox = \App\Hotbox::find( 2 );
    $categories = App\Category::orderby( 'sort' )->get();
    return view( 'menu', compact( 'categories', 'hotbox' ) );
} )->name( 'speisekarte' );

Route::get( '/anfahrt', function () {
    $hotbox = \App\Hotbox::find( 3 );
    return view( 'location', compact('hotbox') );
} )->name( 'anfahrt' );

Route::get( '/reservierung', function () {
    return view( 'reservation' );
} )->name( 'reservierung' );

Route::get( '/catering', function () {
    return view( 'catering' );
} )->name( 'catering' );

Route::group( [ 'middleware' => 'auth' ], function () {
    Route::resource( '/menuitem', 'MenuItemController' );

    Route::resource( '/category', 'CategoryController' );
    Route::post( '/category/{id}/up', 'CategoryController@moveUp' )->name( 'category_up' );
    Route::post( '/category/{id}/down', 'CategoryController@moveDown' )->name( 'category_down' );

    Route::resource( '/option', 'OptionController' );
} );
