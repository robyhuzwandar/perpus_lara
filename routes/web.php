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

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/buku/create', 'BukuController@create')->name('buku.create');
Route::post('/buku/create', 'BukuController@store')->name('buku.store');
Route::get('/buku/view', 'BukuController@view')->name('buku.view');

//Route::delete('/buku/{kodeBuku}/delete', 'BukuController@destroy')->name('buku.destroy');
Route::match(['get', 'post', 'delete'],'/buku/{kodeBuku}/delete', 'BukuController@destroy')->name('buku.destroy');
Route::get('/buku/{kodeBuku}/edit', 'BukuController@edit')->name('buku.edit');
Route::patch('/buku/{kodeBuku}/edit', 'BukuController@update')->name('buku.update');