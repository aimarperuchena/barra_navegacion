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
    return view('home');
});





Route::get('departamentos', 'DepartamentoController@index')->name('departamentos.index');
Route::get('departamentos/{id}', 'DepartamentoController@show')->name('departamentos.show');

Route::get('empleados', 'EmpleadoController@index')->name('empleados.index');
Route::get('empleados/{id}','EmpleadoController@show')->name('empleados.show');
Route::get('proyectos', 'ProyectoController@index')->name('proyectos.index');
Route::get('proyectos/{id}', 'ProyectoController@show')->name('proyectos.show');
Route::get('proyectos/editar/{id}', 'ProyectoController@editar')->name('proyectos.editar');
Route::post('proyectos/update', 'ProyectoController@update')->name('proyectos.update');
Route::get('proyectos/eliminar/{id}', 'ProyectoController@eliminar')->name('proyectos.eliminar');




    


