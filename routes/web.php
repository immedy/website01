<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
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
    return view('website.index');
});

Route::get('/admin', function () {
    return view('dashboard.home');
});

Route::get('/pegawai', [UserController::class, 'index']);
Route::post('/PegawaiInsert', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/auth', [UserController::class, 'authenticate']);
route::post('/logout', [UserController::class, 'logout']);



Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategorismf', [KategoriController::class, 'refsmf']);
Route::post('/kategoriberita', [KategoriController::class, 'refberita']);
Route::post('/kategoriruangan', [KategoriController::class, 'refruangan']);

Route::get('/dokter', function () {
    return view('dashboard.dokter');
});
