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
        $popular_places = json_decode(json_encode([
            ['place' => 'CN Tower'],
            ['place' => 'Leaning Tower of Pisa'],
            ['place' => 'Eiffel Tower'],
            ['place' => 'Taj Mahal'],
            ['place' => 'Great Sphinx of Giza']
            ]
          ));
          return view('home')->with(
            ['continent_list'=> $continent_list, 
            'popular_places'=>$popular_places]);
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('home/fetch', 'HomeController@fetch');
    Route::post('home/search', 'HomeController@search');
    Route::post('home/placeData', 'HomeController@placeData');
    Route::get('/place/{id}', 'PlaceController@index')->name('place');
    Route::post('review/store', 'ReviewController@store');
    Route::get('/shop', 'ShopController@index')->name('shop');
    Route::get('/shop/plan', 'ShopController@plan');
    Route::post('/shop/purchase', 'ShopController@purchase');
    Route::get('/about', 'TeamController@about')->name('about');
    Route::get('/contact', 'TeamController@contact')->name('contact');
    Route::get('/insert', 'MaintainController@insert')->name('insert');
    Route::get('/select', 'MaintainController@select')->name('select');
    Route::post('select/retrieve', 'MaintainController@retrieve');
    Route::get('/update', 'MaintainController@update')->name('update');
    Route::get('/delete', 'MaintainController@delete')->name('delete');
    Route::post('delete/deleteRow', 'MaintainController@deleteRow');
    Route::post('/table', 'MaintainController@table');

});
