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

//Rutas para usuarios
Route::resource('users', UserController::class);
Route::post('/home/coches/{coch}', [UserController::class, 'cochesfav'])->name('users.fav');
Route::get('/home/users/favoritos', [UserController::class, 'mostrarFav'])->name('coches.fav');
Route::delete('/home/coches/{coch}', [UserController::class, 'deletefav'])->name('coches.destroyFav');
Route::put('/home/users/contraseña/{user}', [UserController::class, 'cambioContra'])->name('users.contra');
Route::get('/home/users/mostrar/{user}', [UserController::class, 'mostrarContra'])->name('users.mostrar');


//Ruta para mostrar los coches por carrocerias
Route::get('/home/coches/compactos', [CocheController::class, 'mostrarCompactos'])->name('coches.compac');
Route::get('/home/coches/coupes', [CocheController::class, 'mostrarCoupe'])->name('coches.coupe');
Route::get('/home/coches/familiares', [CocheController::class, 'mostrarFam'])->name('coches.fam');
Route::get('/home/coches/suvs', [CocheController::class, 'mostrarSuv'])->name('coches.suv');
Route::get('/home/coches/monovolumen', [CocheController::class, 'mostrarMono'])->name('coches.mono');

//Ruta para mostrar los mejores coches
Route::get('/home/coches/topCoches', [CocheController::class, 'mostrarCoches'])->name('coches.mejores');

//Ruta para mostrar los coches vintage
Route::get('home/coches/cochesVintage', [CocheController::class, 'mostrarVintage'])->name('coches.vintage');


//Ruta para buscar los coches
Route::get('/home/coches/buscador', [BuscadorController::class, 'indexBusqueda'])->name('coches.buscador');
Route::get('/home/coches/buscadorCompacto', [BuscadorController::class, 'compaMarca'])->name('coches.compa');
Route::get('/home/coches/buscadorCoupe', [BuscadorController::class, 'coupeMarca'])->name('coches.coup');
Route::get('/home/coches/buscadorFamiliar', [BuscadorController::class, 'famMarca'])->name('coches.fami');
Route::get('/home/coches/buscadorMonovolumen', [BuscadorController::class, 'monoMarca'])->name('coches.mon');
Route::get('/home/coches/buscadorSuv', [BuscadorController::class, 'suvMarca'])->name('coches.suvs');



Route::group(['middleware' => ['admin']], function () {
    //Ruta para el panel del Administrador
    Route::get('/home/admin/panel', [AdminController::class, 'adminPanel'])->name('admin.panel');
    //Ruta para el perfil del Administrador
    Route::get('/home/admin/perfil', [AdminController::class, 'mostrarPerfil'])->name('admin.perfil');
    Route::get('/home/admin/perfil/{user}', [AdminController::class, 'editPerfil'])->name('admin.edit');
    Route::put('/home/admin/perfil/{user}', [AdminController::class, 'updatePerfil'])->name('admin.update');
    Route::put('/home/admin/contraseña/{user}', [AdminController::class, 'cambioContra'])->name('admin.contra');
Route::get('/home/admin/mostrar/{user}', [AdminController::class, 'mostrarContra'])->name('admin.mostrar');

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

