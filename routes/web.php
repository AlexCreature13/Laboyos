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

Route::get('/index', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/ubicacion', function () {
    return view('ubicacion');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/carrito', function () {
    return view('carrito');
});