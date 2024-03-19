<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:passport')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource("autor", "App\Http\Controllers\AutorApiController")->middleware('auth:passport');

Route::resource("libro", "App\Http\Controllers\LibroApiController")->middleware('auth:api');
