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

Route::resource('horses','HorseController');

Route::post('create',function(){
    return view('create');
});

Route::get('create','HorseController@index')->name('create');
Route::post('/create/new', 'HorseController@create')->name('new');

Route::get('/edit','HorseController@index')->name('edit');
Route::post('/edit', 'HorseController@edit')->name('edit');

Route::get('/home', 'HomeController@index')->name('home');
