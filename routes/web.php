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

// Route::get('/subsidios/inscripcion_docente',function(){
//     return view('inscripcion');
//     // return view('subsidios');
// })->name('inscripcion');

Route::get('subsidios/instructivo/2020',function(){
    return view('instructivo');
})->name('instructivo');

// Route::get('/subsidios/inscripcion_nodocente',function(){
//     return view('inscripcion-no-docente');
//     // return view('subsidios');
// })->name('inscripcionNoDocente');

Route::get('/inscripcion/completa',function(){
    return view('inscripcionCompleta');
});

Route::get('/ofertavirtual2021',function(){
    return view('virtual');
})->name("oferta.2021");


Route::post('/inscripcion/save','InscripcionController@recieve')->name('guardarInscripcion');
Route::post('/inscripcion/saveNo','InscripcionController@recieveNoDocente')->name('guardarInscripcionNoDocente');
Route::get("/mapuche","mapucheController@index")->name("mapuche");

Route::group(['middleware' => ['auth']], function () {
   // Only authenticated users may enter...
   //

    
Route::get('/inscripciones/docentes','InscripcionController@verInscriptos');
Route::get('/inscripciones/nodocentes', 'InscripcionController@verNoDocentes');

    Route::get('admin',function(){
        return view('admin');
    });

    Route::get('add/resolucion/{id}','CarreraController@nuevaResolucion')->name("addResolucion");
    Route::get('edit/{id}','CarreraController@editView');
    Route::Post('editarCarrera','CarreraController@editSave');
    // Route::get('admin/ofertas','OfertaController@index')->name('ofertas');
    // Route::get('admin/ofertas/add','OfertaController@nuevaOferta')->name('nuevaOferta');
    Route::get('admin/carreras/add','CarreraController@nuevaCarrera')->name('nuevaCarrera');
    // ---v
    Route::post('addcarrera','CarreraController@addCarrera');
    Route::get('edit/autoridad/{id}','AutoridadController@edit');
    // Route::get('edit/designacion/{id}','DesignacionController@edit');
    Route::get('edit/unidad/{id}','UnidadController@edit');
    Route::get('edit/resolucion/{id}','ResolucionController@edit');
    Route::Post('update/resolucion','ResolucionController@update');

    // Gestion
    Route::get('gestion/carreras','CarreraController@gestionListado');
    Route::Post('nuevoAutoridad','AutoridadController@nuevo');
    Route::Post('updateAutoridad','AutoridadController@update');

       Route::Post('editarCarreraModalidad','CarreraController@updateModalidad');
    Route::Post('editarCarreraFecha','CarreraController@updatefecha');
    Route::Post('editarCarreraArea','CarreraController@updateArea');

    Route::get("borrar","CarreraController@borrar");



});

////sector publico

Route::get('becas',function(){
    return view('becas');
})->name('becas');
Route::get('eventos',function(){
    return view('eventos');
});
Route::get('emovies',function(){
    return view('emovies');
});
Route::get('formacion',function(){
    return view('formacion');
});
Route::get('subsidios',function(){
    return view('subsidios');
})->name('subsidios');

Route::get('subsidios',function(){
    return view('subsidios');
})->name('subsidios');
Route::get('docentes',function(){
    return view('padronDocentes');
})->name('padronDocentes');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carreras','CarreraController@index')->name('carreras');
Route::get('/carreras/nuevo','CarreraController@index_nuevo')->name('carreras.nuevo');
Route::get('/carreras/doctorado','CarreraController@doctorados')->name('doctorado');
Route::get('/carreras/maestria','CarreraController@maestrias')->name('maestrias');
Route::get('/carreras/especializacion','CarreraController@especializaciones')->name('especializaciones');
Route::get('/carreras/doctorado/{id}','CarreraController@showdoctorados')->name('doctorado');
Route::get('/carreras/maestria/{id}','CarreraController@showmaestrias')->name('maestrias');
Route::get('/carreras/especializacion/{id}','CarreraController@showespecializaciones')->name('especializaciones');

Route::get('/carreras/diplomatura','CarreraController@diplomaturas');
Route::get('/carreras/diplomatura/{id}','CarreraController@showdiplomaturas');

Route::get('/carreras/cursos','CarreraController@cursos');
Route::get('/carreras/cursos/{id}','CarreraController@showcursos');


Route::get("/download/doctorado",'CarreraController@getDoctoradoPdf');
Route::get("/doctorado",'CarreraController@getDoctorado');



////Open Data

Route::get('get/carreras','CarreraController@getJson');
Route::get('get/carrera/{id}','CarreraController@getCarrera');

//file test
Route::get('nuevotramite',function(){
    return view('nuevo_tramite');
});

Route::post('/nuevotramite',"TramiteController@subir");

Route::get('tramites',"TramiteController@listado");




// /**
//  *
//  * INTEGRACION CON SISTEMA DE ALERTA DE EXPEDIENTES FACENA
//  *
//  * RUTAS DE "EXPEDIENTES FACENA"
//  *
//  */

// Route::group(['middleware' => ['auth']], function () {
//     //
//     Route::get('expedientes/asuntos','AsuntoController@verTodos');
//     Route::get('expedientes/subscribe','AsuntoController@subscribe');
//     Route::get('expedientes/unsubscribe','AsuntoController@unsubscribe');
//     Route::get('expedientes', 'AsuntoController@verAsuntos');

//     Route::get('expedientes/superadmin','UserController@superAdmin');
//     Route::post('expedientes/updatefilters','UserController@updateFilters');

// });

// Route::get('expedientes/checkupdate','AlertaController@checkUpdate');


// ///probar notificacion
// Route::get('expedientes/test','AsuntoController@sendNotificacion');
// //  TODO route de superadmin
// Route::get('expedientes/config/lastid/{lastid}', 'ConfiguracionController@set');
// Route::get('expedientes/config/lastid/', 'ConfiguracionController@get');


// // Route::get('del/{carrer_id}','CarreraController@delete');
