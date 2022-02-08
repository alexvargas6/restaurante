<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/res');
});
Route::get('/res', 'menuControl@rest');
Route::get('/administrar', 'administradorControl@showAdmin')->name('usuarios');
Route::get('/menu', 'administradorControl@showMenu')->name('menu');
Route::get('/about', 'administradorControl@showAbout')->name('about');
Route::get('/interfaz', 'administradorControl@showInterfazConfig')->name('interfaz');
Route::get('/chef', 'administradorControl@showChef')->name('adminChef');
Route::get('/whyusadmin', 'administradorControl@showWhy')->name('adminWhy');
Route::get('/eventos', 'administradorControl@showEvents')->name('adminEvents');
Route::get('/galeria', 'administradorControl@showGaleria')->name('adminGaleria');
Auth::routes();

Route::group(['prefix' => 'api'], function () {
    Route::post('/categoria/guardar', 'platillosControl@agregarCat')->name('addCat');
    Route::post('/alimento/guardar', 'platillosControl@addAlimento')->name('addAlimento');
    Route::delete('/alimento/{id}/delete', 'platillosControl@delete')->name('eliminarMenu');
    Route::post('/update/inter', 'interfazControl@updateAll')->name('upInter');
    Route::post('/crear/chef', 'chefController@storeChef')->name('chefStore');
    Route::post('/editae/chef', 'chefController@editChef')->name('chefEdit');
    Route::delete('/chef/{id}/delete', 'chefController@deleteChef')->name('eliminarChef');
    Route::post('/crear/evento', 'eventController@storeEvent')->name('storeEvent');
    Route::post('/editar/evento', 'eventController@editEvento')->name('editarEvent');
    Route::delete('/evento/{id}/delete', 'eventController@deleteEvento')->name('eliminarEvento');
    Route::delete('/punto/{id}/delete', 'aboutController@deletePunto')->name('eliminarPunto');
    Route::post('/punto/guardar', 'aboutController@addPunto')->name('guardarPunto');
    Route::post('/about/guardar', 'aboutController@aboutEdit')->name('guardarAbout');
    Route::post('/crear/motivo', 'whyUsControl@añadirMotivo')->name('guardarMotivo');
    Route::delete('/motivo/{id}/delete', 'whyUsControl@delete')->name('eliminarMotivo');
    Route::post('/crear/especial', 'platillosControl@especiales')->name('guardarEspecial');
});

Route::get('/home', 'HomeController@index')->name('home');
