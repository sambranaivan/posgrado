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
///super index
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
   // Only authenticated users may enter...
    Route::get('admin',function(){
        return view('admin');
    });

    Route::get('edit/{id}','CarreraController@editView');
    Route::Post('editarCarrera','CarreraController@editSave');
    Route::get('admin/ofertas','OfertaController@index')->name('ofertas');
    Route::get('admin/ofertas/add','OfertaController@nuevaOferta')->name('nuevaOferta');
    // Carreras
    //   Route::get('admin/carreras','CarreraController@index')->name('carreras');
      Route::get('admin/carreras/add','CarreraController@nuevaCarrera')->name('nuevaCarrera');

});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carreras','CarreraController@index')->name('carreras');
Route::get('/carreras/doctorado','CarreraController@doctorados')->name('doctorado');
Route::get('/carreras/maestria','CarreraController@maestrias')->name('maestrias');
Route::get('/carreras/especializacion','CarreraController@especializaciones')->name('especializaciones');
Route::get('/carreras/doctorado/{id}','CarreraController@showdoctorados')->name('doctorado');
Route::get('/carreras/maestria/{id}','CarreraController@showmaestrias')->name('maestrias');
Route::get('/carreras/especializacion/{id}','CarreraController@showespecializaciones')->name('especializaciones');

Route::get("/download/doctorado",'CarreraController@getDoctoradoPdf');

Route::get("/doctorado",'CarreraController@getDoctorado');



////Open Data

