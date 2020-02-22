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

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    // my routes
    Route::get('/', function () {
        $continent_list = DB::table('continents')
        ->get();
        return view('home')->with('continent_list', $continent_list);
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('home/fetch', 'HomeController@fetch');

});
