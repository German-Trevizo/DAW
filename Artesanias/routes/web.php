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
    return view('index');
});


//podemos pasar varias parametros con with a la direccion de la ruta 
// atravez del metodo post
Route::get('/contacto', function () {
    $contacto = "German Trevizo";
    $valores = 10;
    $color = "#ccc";
    return view('contacto')
        ->with('nombre', $contacto)
        ->with('valor', $valores)
        ->with('fondo', $color);
});


Route::get('/producto/{id}/{nombre}', function ($id, $nombre) {
    return view('verproducto')
        ->with('id', $id)
        ->with('nombre', $nombre);
});

// hacemos la ruta para el adminstrativo y los layouts

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/adminis', function () {
    return view('admin.layouts.main');
});

Route::get('/admin/productos', function () {
    return view('admin.verproducto');
});

//practica de bootstrap 23/03/21

Route::get('/practica', function () {
    return view('practica');
});