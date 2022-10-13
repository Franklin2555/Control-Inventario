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


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('productos')->name('productos/')->group(static function() {
            Route::get('/',                                             'ProductoController@index')->name('index');
            Route::get('/create',                                       'ProductoController@create')->name('create');
            Route::post('/',                                            'ProductoController@store')->name('store');
            Route::get('/{producto}/edit',                              'ProductoController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProductoController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{producto}',                                  'ProductoController@update')->name('update');
            Route::delete('/{producto}',                                'ProductoController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('categoria')->name('categoria/')->group(static function() {
            Route::get('/',                                             'CategoriaController@index')->name('index');
            Route::get('/create',                                       'CategoriaController@create')->name('create');
            Route::post('/',                                            'CategoriaController@store')->name('store');
            Route::get('/{categorium}/edit',                            'CategoriaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CategoriaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{categorium}',                                'CategoriaController@update')->name('update');
            Route::delete('/{categorium}',                              'CategoriaController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('inventarios')->name('inventarios/')->group(static function() {
            Route::get('/',                                             'InventarioController@index')->name('index');
            Route::get('/create',                                       'InventarioController@create')->name('create');
            Route::post('/',                                            'InventarioController@store')->name('store');
            Route::get('/{inventario}/edit',                            'InventarioController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'InventarioController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{inventario}',                                'InventarioController@update')->name('update');
            Route::delete('/{inventario}',                              'InventarioController@destroy')->name('destroy');
        });
    });
});