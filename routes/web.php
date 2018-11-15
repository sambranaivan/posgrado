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
   //
    Route::get('admin',function(){
        return view('admin');
    });

    Route::get('edit/{id}','CarreraController@editView');
    Route::Post('editarCarrera','CarreraController@editSave');
    Route::get('admin/ofertas','OfertaController@index')->name('ofertas');
    Route::get('admin/ofertas/add','OfertaController@nuevaOferta')->name('nuevaOferta');
    Route::get('admin/carreras/add','CarreraController@nuevaCarrera')->name('nuevaCarrera');
    Route::get('edit/autoridad/{id}','AutoridadController@edit');
    Route::get('edit/designacion/{id}','DesignacionController@edit');
    Route::get('edit/unidad/{id}','UnidadController@edit');
    Route::get('edit/resolucion/{id}','ResolucionController@edit');
    Route::Post('update/resolucion','ResolucionController@update');

    // Gestion
    Route::get('gestion/carreras','CarreraController@gestionListado');
    Route::Post('nuevoAutoridad','AutoridadController@nuevo');
    Route::Post('updateAutoridad','AutoridadController@update');

    Route::Post('editarCarreraFecha','CarreraController@updatefecha');

});

////sector publico

Route::get('becas',function(){
    return view('becas');
});
Route::get('eventos',function(){
    return view('eventos');
});
Route::get('formacion',function(){
    return view('formacion');
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

Route::get('get/carreras','CarreraController@getJson');

//file test
Route::get('nuevotramite',function(){
    return view('nuevo_tramite');
});

Route::post('/nuevotramite',"TramiteController@subir");

Route::get('tramites',"TramiteController@listado");
