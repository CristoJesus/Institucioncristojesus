<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin','administradorController');
Route::resource('secretaria','secretariacontroller');
Route::resource('docente','docentecontroller');
Route::resource('inicio','iniciocontroller');
Route::resource('cargaacademica','cargacontroller');
Route::resource('asignatura','asignaturacontroller');
Route::resource('archivos','archivoscontroller');
Route::resource('restudiante','restudiantecontroller');
Route::resource('rdocente','rdocentecontroller');
Route::resource('actualizarnota','actualizarnotacontroller');
Route::resource('actualizarasignatura','actualizarasignaturacontroller');
Route::resource('actualizardocente','actualizardocentecontroller');
Route::resource('actualizarestudiante','actualizarestudiantecontroller');

?>
