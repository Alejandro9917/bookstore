<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PurcharseController;
use App\Http\Controllers\TagController;

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

//Rutas para api de comics
Route::get('/comics', [ComicController::class, 'index']);
Route::get('/comic/{id}', [ComicController::class, 'getComic']);
Route::get('/comics/recent', [ComicController::class, 'recentCommics']);
Route::get('/comics/popular', [ComicController::class, 'popularCommics']);
//Rutas con middleware
Route::post('/comics/store', [ComicController::class, 'store'])->name('comic.store');

//Rutas para api de tags
Route::get('/tags', [TagController::class, 'index']);

//Rutas para api de collections
Route::get('/collections', [CollectionController::class, 'index']);

//Rutas para retornar las views
Route::view('/', 'index');
Route::view('/products', 'products');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/shopcart', 'shopcart');

//Rutas para retornar las views de admin
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/admin/tags', 'admin/tags')->name('admin.tags');
Route::view('/admin/collections', 'admin/collections')->name('admin.collections');

//Rutas para retornar las vistas del cliente
Route::view('/client/login', 'login');
Route::get('/client/logout', [ClientController::class, 'logout'])->name('client.logout');
Route::view('/client/register', 'register');
Route::post('/client/verify', [ClientController::class, 'login'])->name('client.login');