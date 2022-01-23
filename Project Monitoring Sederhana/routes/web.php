<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'awal']);

Route::get('/home', [BookController::class, 'home']);

Route::get('/tabel',[BookController::class, 'index']);

Route::get('/cari/{id}', [BookController::class, 'cari']);

Route::post('/tambah', [BookController::class, 'tambah']);

Route::get('/hapus/{id}',[BookController::class, 'hapus']);

Route::get('/show/{id}',[BookController::class, 'show']);

Route::post('/edit',[BookController::class, 'edit']);