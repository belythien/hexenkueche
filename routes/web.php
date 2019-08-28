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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', function() {
    $categories = App\Category::orderby('sort')->get();
    return view('menu')->with('categories', $categories);
})->name('menu');

Route::get('/location', function() {
    return view('location');
})->name('location');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/menuitem', 'MenuItemController');

    Route::resource('/category', 'CategoryController');
    Route::post('/category/{id}/up', 'CategoryController@moveUp')->name('category_up');
    Route::post('/category/{id}/down', 'CategoryController@moveDown')->name('category_down');

    Route::resource('/option', 'OptionController');
});