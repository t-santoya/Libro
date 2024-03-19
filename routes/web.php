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


Route::get('libros/index/autor', "App\Http\Controllers\AutorController@index")->name("index");

Route::get('libros/index/libro', "App\Http\Controllers\LibroController@index")->name("index");


Route::post('libros/index/autor', "App\Http\Controllers\AutorController@store")->name("guardarAutor");

Route::post('libros/index/libro', "App\Http\Controllers\LibroController@store")->name("guardar");


Route::put('autores/{id}', "App\Http\Controllers\AutorController@update")->name("actualizarAutor");

Route::put('libross/{id}', "App\Http\Controllers\LibroController@update")->name("actualizar");


Route::delete('autores/{id}', "App\Http\Controllers\AutorController@destroy")->name("eliminarAutor");

Route::delete('libross/{id}', "App\Http\Controllers\LibroController@destroy")->name("eliminar");



Route::resource("autor", "App\Http\Controllers\AutorController")->middleware("auth");

Route::resource("libro", "App\Http\Controllers\LibroController")->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
