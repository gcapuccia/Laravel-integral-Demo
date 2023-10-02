<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ENRUTADOR
Route::get('/Manzanas', function () {//esto en un enrutador
    return '<h1>Esto es una especie de enrutador... en este caso devolvera el estring con la siguiente funcion</h1>'; 
}); */

