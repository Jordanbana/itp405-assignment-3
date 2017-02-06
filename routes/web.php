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

//Going to reroute to /dvds/search
Route::get('/', function () {
    return redirect('/dvds/search');
});

//Search page
Route::get('/dvds/search','SearchController@index');

//Results page
Route::get('/dvds', 'SearchController@results');
