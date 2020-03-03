<?php

use App\Empleado;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testhome', 'HomeController@test')->name('testhome')->middleware('auth');
Route::get('/test', 'TestController@index')->name('test')->middleware('auth');
Route::get('/about', 'TestController@about')->name('about')->middleware('auth');
Route::get('/servicio', 'ServicioController@index')->name('servicio')->middleware('auth');
Route::get('/nuevaoportunidad', 'OportunidadController@create')->name('nuevaoportunidad')->middleware('auth');
Route::post('/createoportunidad', 'OportunidadController@store')->name('createoportunidad')->middleware('auth');
Route::post('/agregarcliente', 'ClienteController@store')->name('agregarcliente')->middleware('auth');
Route::get('/oportunidad', 'EmpleadoController@index')->name('oportunidad')->middleware('auth');
Route::get('/veroportunidad', 'OportunidadController@index')->name('veroportunidad')->middleware('auth');

