<?php

use Illuminate\Support\Facades\Route;

/* ------------------------------------------------------------------------ */
/* | Rutas del sistema | */
/* Login */
Route::get('/', function () { return view('/index'); });
Route::get('/index', function () { return view('/index'); });

/* Vista - Inicio */
Route::get('/home', function () { return view('user/home'); });
/* Vista - Administrador */
Route::get('/admin', function () { return view('user/admin'); });
/* Vista - Productos */
Route::get('/product', function () { return view('user/product'); });
/* Vista - Ventas */
Route::get('/sold', function () { return view('user/sold'); });
/* Vista - Inventario */
Route::get('/stock', function () { return view('user/stock'); });
/* ------------------------------------------------------------------------ */