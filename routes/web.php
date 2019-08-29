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
    return view( 'welcome' )->with( 'hotbox', $hotbox );
} );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

Route::get( '/speisekarte', function () {
    $categories = App\Category::orderby( 'sort' )->get();
    return view( 'menu' )->with( 'categories', $categories );
} )->name( 'speisekarte' );

Route::get( '/anfahrt', function () {
    return view( 'location' );
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
