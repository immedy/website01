<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JabatanController;
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
Route::get('/home', [UserController::class, 'home'])->middleware('auth')->name('home');
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/auth', [UserController::class, 'authenticate']);
route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/pegawai', [UserController::class, 'index'])->middleware('auth');
Route::post('/PegawaiInsert', [UserController::class, 'store'])->middleware('auth');

Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');
route::post('/DokterInsert', [DokterController::class, 'store'])->middleware('auth');

Route::get('/jabatan', [JabatanController::class, 'index'])->middleware('auth');
Route::post('/InsertJabatan', [JabatanController::class, 'store'])->middleware('auth');

Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::post('/kategorismf', [KategoriController::class, 'refsmf'])->middleware('auth');
Route::post('/kategoriberita', [KategoriController::class, 'refberita'])->middleware('auth');
Route::post('/kategoriruangan', [KategoriController::class, 'refruangan'])->middleware('auth');
Route::post('/kategorijabatan', [KategoriController::class, 'refjabatan'])->middleware('auth');


Route::get('/berita/insert', [BeritaController::class, 'insert'])->middleware('auth');
Route::resource('/berita', BeritaController::class)->middleware('auth');


// website
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/CapaianIndikatorPMKP', [WebsiteController::class, 'CapaianIndikatorPMKP']);
Route::get('/BeritaKesehatan', [WebsiteController::class, 'BeritaKesehatan']);
Route::get('/BeritaDetail/{id}', [WebsiteController::class, 'detail']);
Route::get('/JadwalDokter', [WebsiteController::class, 'JadwalDokter']);
Route::get('/TataTertibPengunjungDanjamBesuk', [WebsiteController::class, 'TataTertibPengunjungDanjamBesuk']);
Route::get('/VisiDanMisi', [WebsiteController::class, 'VisiDanMisi']);
Route::get('/Sejarah', [WebsiteController::class, 'Sejarah']);
Route::get('/StrukturOrganisasi', [WebsiteController::class, 'StrukturOrganisasi']);
