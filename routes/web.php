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
Auth::routes();

Route::group(['prefix' => 'api'], function () {
    Route::post('/categoria/guardar', 'platillosControl@agregarCat')->name('addCat');
    Route::post('/alimento/guardar', 'platillosControl@addAlimento')->name('addAlimento');
    Route::delete('/alimento/{id}/delete', 'platillosControl@delete')->name('eliminarMenu');
    Route::post('/update/inter', 'interfazControl@updateAll')->name('upInter');
});

Route::get('/home', 'HomeController@index')->name('home');
