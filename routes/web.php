<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\comedoresController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/nav.blade.php', function () {
    return view('register');
});

route::get('catalogo/create',[CatalogoController::class,'create'])->name('catalogo');
route::post('catalogo/store',[CatalogoController::class,'store'])->name('catalogo.store');

//produto

route::get('producto/create',[productoController::class,'create'])->name('producto.create');
route::post('producto/store',[productoController::class,'store'])->name('producto.store');
route::get('producto/show',[productoController::class,'show'])->name('producto.show');
route::get('producto/{id}/edit',[productoController::class,'edit'])->name('producto.edit');
route::post('producto/{id}/update',[productoController::class,'update'])->name('producto.update');
route::delete('producto/{id}/destroy',[productoController::class,'destroy'])->name('producto.destroy');

//comedores
route::get('comedor/create',[comedoresController::class,'create'])->name('comedor.create');
route::post('comedor/store',[comedoresController::class,'store'])->name('comedor.store');
route::get('comedor/show',[comedoresController::class,'show'])->name('comedor.show');
route::get('comedor/{id}/edit',[comedoresController::class,'edit'])->name('comedor.edit');
route::post('comedor/{id}/update',[comedoresController::class,'update'])->name('comedor.update');
route::delete('comedor/{id}/destroy',[comedoresController::class,'destroy'])->name('comedor.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/comedor', [App\Http\Controllers\HomeController::class, 'comedor'])->name('comedor');