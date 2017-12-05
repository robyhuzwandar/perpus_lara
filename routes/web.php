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


Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin', function () {
        return view('dashboard');
    });
    Route::get('/buku/create', 'BukuController@create')->name('buku.create');
    Route::post('/buku/create', 'BukuController@store')->name('buku.store');
    Route::get('/buku/index', 'BukuController@index')->name('buku.index');
    Route::match(['get', 'post', 'delete'],'/buku/{kodeBuku}/delete', 'BukuController@destroy')->name('buku.destroy');
    Route::get('/buku/{kodeBuku}/edit', 'BukuController@edit')->name('buku.edit');
    Route::patch('/buku/{kodeBuku}/edit', 'BukuController@update')->name('buku.update');

    Route::get('/pemrograman/create', 'PemrogramanController@create')->name('pemrograman.create');
    Route::post('/pemrograman/create', 'PemrogramanController@store')->name('pemrograman.store');

    Route::get('/pemrograman/index', 'PemrogramanController@index')->name('pemrograman.index');

    Route::delete('/pemrograman/{pemrograman}/delete', 'PemrogramanController@destroy')->name('pemrograman.destroy');
    Route::get('/pemrograman/{pemrograman}/edit', 'PemrogramanController@edit')->name('pemrograman.edit');
    Route::patch('/pemrograman/{pemrograman}/edit', 'PemrogramanController@update')->name('pemrograman.update');

    Route::get('/platform/create', 'PlatformController@create')->name('platform.create');
    Route::post('/platform/create', 'PlatformController@store')->name('platform.store');
    Route::get('/platform/index', 'PlatformController@index')->name('platform.index');
    Route::delete('/platform/{platform}/delete', 'PlatformController@destroy')->name('platform.destroy');
    Route::get('/platform/{platform}/edit', 'PlatformController@edit')->name('platform.edit');
    Route::patch('/platform/{platform}/edit', 'PlatformController@update')->name('platform.update');



});


Auth::routes();

Route::get('/auth/login', 'HomeController@index')->name('home');