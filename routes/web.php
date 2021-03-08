<?php

use App\Http\Controllers\CarroceriaController;
use App\Http\Controllers\CocheController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuscadorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Carroceria;
use App\Models\Coche;
use App\Models\Marca;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');

Auth::routes();

Route::resource('carrocerias', CarroceriaController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('coches', CocheController::class);
Route::resource('users', UserController::class);

Route::get('/home/coches/buscador', [BuscadorController::class, 'indexBusqueda'])->name('coches.buscador');


Route::group(['middleware' => ['admin']], function () {
    //Ruta para el panel del Administrador
    Route::get('/home/admin/panel', [AdminController::class, 'adminPanel'])->name('admin.panel');
    //Ruta para el perfil del Administrador
    Route::get('/home/admin/perfil', [AdminController::class, 'mostrarPerfil'])->name('admin.perfil');
    Route::get('/home/admin/perfil/{user}', [AdminController::class, 'editPerfil'])->name('admin.edit');
    Route::put('/home/admin/perfil/{user}', [AdminController::class, 'updatePerfil'])->name('admin.update');

    //Rutas para manejar los usuarios
    Route::get('/home/admin/users', [AdminController::class, 'usuList'])->name('admin.users');
    Route::delete('/home/admin/users/{user}', [AdminController::class, 'usuDestroy'])->name('admin.users.destroy');

    //Rutas para manejar los coches
    Route::get('/home/admin/coches', [AdminController::class, 'cochesList'])->name('admin.coches');
    Route::delete('/home/admin/coches/{coch}', [AdminController::class, 'cochesDestroy'])->name('admin.coches.destroy');
    Route::get('/home/admin/coches/create', [AdminController::class, 'cochesCreate'])->name('admin.coches.create');
    Route::post('/home/admin/coches/create', [AdminController::class, 'cochesStore'])->name('admin.coches.store');
    Route::get('/home/admin/coches/{coch}', [AdminController::class, 'cochesEdit'])->name('admin.coches.edit');
    Route::put('/home/admin/coches/{coch}', [AdminController::class, 'cochesUpdate'])->name('admin.coches.update');


    //Rutas para manejar las marcas
    Route::get('/home/admin/marcas', [AdminController::class, 'marcaList'])->name('admin.marcas');
    Route::delete('/home/admin/marcas/{marca}', [AdminController::class, 'marcaDestroy'])->name('admin.marcas.destroy');
    Route::get('/home/admin/marcas/create', [AdminController::class, 'marcasCreate'])->name('admin.marcas.create');
    Route::post('/home/admin/marcas/create', [AdminController::class, 'marcaStore'])->name('admin.marcas.store');
    Route::get('/home/admin/marcas/{marca}', [AdminController::class, 'marcaEdit'])->name('admin.marcas.edit');
    Route::put('/home/admin/marcas/{marca}', [AdminController::class, 'marcaUpdate'])->name('admin.marcas.update');

});

Route::get('/home', [HomeController::class, 'index'])->name('home');

