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

Route::group(['middleware' => ['auth']], function () {
   // Only authenticated users may enter...
    Route::get('admin/ofertas','OfertaController@index')->name('ofertas');
    Route::get('admin/ofertas/add','OfertaController@nuevaOferta')->name('nuevaOferta');
    // Carreras
      Route::get('admin/carreras','CarreraController@index')->name('carreras');
      Route::get('admin/carreras/add','CarreraController@nuevaCarrera')->name('nuevaCarrera');

});

Route::get('/home', 'HomeController@index')->name('home');
