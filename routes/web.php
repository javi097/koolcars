<?php

use App\Http\Controllers\CarroceriaController;
use App\Http\Controllers\CocheController;
use App\Http\Controllers\MarcaController;
use App\Models\Carroceria;
use App\Models\Coche;
use App\Models\Marca;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



