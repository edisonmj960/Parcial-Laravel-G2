<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Area;
use App\Http\Controllers\Libro;
use App\Http\Controllers\Libreria;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'index']);


Route::get('/edison/areas', [Area::class, 'index']);


Route::get('/edison/libros', [Libro::class, 'index']);


Route::get('/edison/presentacion', [Libreria::class, 'index']);
