<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
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
// Dashboard
Route::get('/admin', [UserController::class, 'home'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/auth', [UserController::class, 'authenticate']);
route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/pegawai', [UserController::class, 'index'])->middleware('auth');
Route::post('/PegawaiInsert', [UserController::class, 'store'])->middleware('auth');

Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');
route::post('/DokterInsert', [DokterController::class, 'store'])->middleware('auth');




Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::post('/kategorismf', [KategoriController::class, 'refsmf'])->middleware('auth');
Route::post('/kategoriberita', [KategoriController::class, 'refberita'])->middleware('auth');
Route::post('/kategoriruangan', [KategoriController::class, 'refruangan'])->middleware('auth');


// website
Route::get('/', [WebsiteController::class, 'index']);
