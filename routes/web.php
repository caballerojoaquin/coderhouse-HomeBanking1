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

// Ruta :: obtener ('archivo link', en funcion de (algo) retornar la vista ('nombre del archivo que está en view'))
Route::get('/mbanking', function () {
    return view('mbanking');
});