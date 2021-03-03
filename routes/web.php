<?php

use App\Http\Controllers\CarroceriaController;
use App\Http\Controllers\CocheController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


Route::group(['middleware' => ['admin']], function () {
    //Ruta para el panel del Administrador
    Route::get('/home/admin/panel', [AdminController::class, 'adminPanel'])->name('admin.panel');

    //Rutas para manejar los usuarios
    Route::get('/home/admin/users', [AdminController::class, 'usuList'])->name('admin.users');
    Route::get('/home/admin/users/{user}', [AdminController::class, 'usuDestroy'])->name('admin.users.destroy');

    //Rutas para manejar los coches
    Route::get('/home/admin/coches', [AdminController::class, 'cochesList'])->name('admin.coches');
    Route::get('/home/admin/coches/{coch}', [AdminController::class, 'cochesDestroy'])->name('admin.coches.destroy');

    //Rutas para manejar las marcas
    Route::get('/home/admin/marcas', [AdminController::class, 'marcaList'])->name('admin.marcas');
    Route::get('/home/admin/marcas/{marca}', [AdminController::class, 'marcaDestroy'])->name('admin.marcas.destroy');


});

Route::get('/home', [HomeController::class, 'index'])->name('home');





