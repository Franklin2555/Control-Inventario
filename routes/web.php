<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriumController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

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

// Ruta de módulo categorías
Route::resource('categoria', App\Http\Controllers\CategoriumController::class)->middleware('auth');
// Ruta de módulo inventario
Route::resource('inventario', App\Http\Controllers\InventarioController::class)->middleware('auth');
// Ruta de módulo productos
Route::resource('producto', App\Http\Controllers\ProductoController::class)->middleware('auth');
// Ruta de módulo ventas
Route::resource('ventas', App\Http\Controllers\ventaController::class)->middleware('auth');
// Ruta al inicio
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//_______________________________
//_______________________________
// RUTAS DE BUSCADOR.
//_______________________________
//_______________________________
// Budqueda de Categorias.
Route::get('category/share', [CategoriumController::class, 'share'])->name('category.share');
// Busqueda de Inventario
Route::get('inventary/share', [InventarioController::class, 'share'])->name('inventary.share');
// Busqueda de Productos
Route::get('product/share', [ProductoController::class, 'share'])->name('product.share');
// Busqueda de Ventas
Route::get('Sales/share', [VentaController::class, 'share'])->name('Sales.share');