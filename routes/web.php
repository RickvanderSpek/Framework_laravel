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

Route::get('/maak_wish', function () {
    return view('maak_wish');
});

Route::get('/update_wish', function () {
    return view('update_wish');
});

Route::get('/update_wish', 'WishesController@printWishes');

Route::post('/update_wish/update', 'WishesController@updateWishes');

Route::get('/delete_wish', 'WishesController@showWishes');


Route::post('/delete_wish/delete', 'WishesController@verwijderWishes');

Auth::routes();

Route::get('/wishes', 'WishesController@getWishes');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/maak_wish/submit', 'WishesController@submit');

