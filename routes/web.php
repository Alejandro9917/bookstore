<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ComicController;
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
Route::get('/comics/recent', [ComicController::class, 'recentCommics']);
Route::get('/comics/popular', [ComicController::class, 'popularCommics']);

//Rutas para retornar las views
Route::view('/', 'home');
Route::view('/products', 'products');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/shopcart', 'shopcart');