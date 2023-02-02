<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TarjetaController;

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

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'register')->name('registro');


Route::post('/validar-registro', [LoginController::class, 'register'])->
    name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->
    name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


    Route::get('/shop', [CartController::class, 'shop'])->middleware('auth')->name('shop');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.store');
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::post('/procesopedido', [CartController::class, 'procesopedido'])->name('cart.procesopedido');

Route::resource('product', ProductController::class);

Route::resource('tarjeta', TarjetaController::class);

Route::resource('venta', VentaController::class);

Route::resource('detalle', DetalleController::class);

Route::delete('product', [ProductController::class, 'shop']);

Route::resource('user', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
