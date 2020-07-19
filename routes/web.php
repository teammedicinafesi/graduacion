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
    return view('welcome');
});

Auth::routes();

Route::get('/admin','AdminController@index');
Route::get('/admin/graduacion/{mes}','AdminController@graduacion')->name('listado_graduacion');
Route::get('/admin/registrar_boletos/{id}','AdminController@registrar_boletos');
Route::post('/admin/registrar_boletos/{id}','AdminController@store_boletos')->name('strore_boletos');

Route::get('/home', 'UserController@index')->name('home');