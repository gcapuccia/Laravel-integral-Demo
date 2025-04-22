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

 /* ENRUTADOR */
Route::get('/Manzanas', function () {//esto en un enrutador
    $nombre = 'Guido';
    $numero = 7;
    return view('Manzanas', 
    ['nombreenvista' => $nombre ,
     'numeroenvista'=>$numero
    ]);
});
 
