<?php

//----------------------------------------------------
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriumController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\GraficaController;
//----------------------------------------------------

/*
|--------------------------------------------------------------------------
| Rutas web
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| las rutas son cargadas por el "RouteServiceProvider" dentro de un grupo que
| contiene el grupo de middleware "web".
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
//----------------------------------------------------
/*  RUTAS PARA GENERAR PDF  */
// Para categoria
Route::get('categoria/report', [App\Http\Controllers\CategoriumController::class, 'report'])->name('categoria.report');
// Para Inventario
Route::get('inventario/report', [App\Http\Controllers\InventarioController::class, 'report'])->name('inventario.report');
// Para ventas
Route::get('ventas/report', [App\Http\Controllers\ventaController::class, 'report'])->name('ventas.report');
// Para Productos
Route::get('productos/report', [App\Http\Controllers\ProductoController::class, 'report'])->name('producto.report');
//----------------------------------------------------

//----------------------------------------------------
/*  RUTAS DE MÓDULOS  */
// Ruta de módulo categorías
Route::resource('categoria', App\Http\Controllers\CategoriumController::class)->middleware('auth');
// Ruta de módulo inventario
Route::resource('inventario', App\Http\Controllers\InventarioController::class)->middleware('auth');
// Ruta de módulo productos
Route::resource('producto', App\Http\Controllers\ProductoController::class)->middleware('auth');
// Ruta de módulo ventas
Route::resource('ventas', App\Http\Controllers\ventaController::class)->middleware('auth');
// Ruta de módulo ventas
Route::resource('graficas', App\Http\Controllers\GraficaController::class)->middleware('auth');
// Ruta al inicio
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//----------------------------------------------------

//----------------------------------------------------
// RUTAS DE BUSCADOR.
// Budqueda de Categorias.
Route::get('category/share', [CategoriumController::class, 'share'])->name('category.share');
// Busqueda de Inventario
Route::get('inventary/share', [InventarioController::class, 'share'])->name('inventary.share');
// Busqueda de Productos
Route::get('product/share', [ProductoController::class, 'share'])->name('product.share');
// Busqueda de Ventas
Route::get('Sales/share', [VentaController::class, 'share'])->name('Sales.share');
//----------------------------------------------------