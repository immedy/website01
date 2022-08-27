<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CapaianIndikatorController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\IndikatorDetailController;
use App\Http\Controllers\IndikatorMutuCOntroller;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use GuzzleHttp\Middleware;
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
Route::resource('/Menu', MenuController::class)->middleware('auth');


Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/auth', [UserController::class, 'authenticate']);
route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/pegawai', [UserController::class, 'index'])->middleware('auth');
Route::post('/PegawaiInsert', [UserController::class, 'store'])->middleware('auth');

// Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');
// Route::post('/DokterInsert', [DokterController::class, 'store'])->middleware('auth');
Route::resource('/dokter', DokterController::class)->middleware('auth');


Route::resource('/jabatan', JabatanController::class)->middleware('auth');

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategorismf', [KategoriController::class, 'refsmf'])->middleware('auth');
Route::post('/kategoriberita', [KategoriController::class, 'refberita'])->middleware('auth');
Route::post('/kategoriruangan', [KategoriController::class, 'refruangan'])->middleware('auth');
Route::post('/kategorijabatan', [KategoriController::class, 'refjabatan'])->middleware('auth');
Route::post('/kategoripoliklinik', [KategoriController::class, 'refpoliklinik'])->middleware('auth');
Route::post('/kategoriindikator', [KategoriController::class, 'refinidkator'])->middleware('auth');


Route::get('/berita/insert', [BeritaController::class, 'insert'])->middleware('auth');
Route::resource('/berita', BeritaController::class)->middleware('auth');

Route::resource('/IndikatorMutu', IndikatorMutuController::class)->middleware('auth');
Route::resource('/CapaianIndikator', CapaianIndikatorController::class)->middleware('auth');


// website
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/CapaianIndikatorPMKP', [WebsiteController::class, 'CapaianIndikatorPMKP']);
Route::get('/CapaianIndikatorPMKP/Detail', [WebsiteController::class, 'IndikatorDetail']);
Route::get('/BeritaKesehatan', [WebsiteController::class, 'BeritaKesehatan']);
Route::get('/BeritaDetail/{id}', [WebsiteController::class, 'detail']);
Route::get('/JadwalDokter', [WebsiteController::class, 'JadwalDokter']);
Route::get('/TataTertibPengunjungDanjamBesuk', [WebsiteController::class, 'TataTertibPengunjungDanjamBesuk']);
Route::get('/VisiDanMisi', [WebsiteController::class, 'VisiDanMisi']);
Route::get('/Sejarah', [WebsiteController::class, 'Sejarah']);
Route::get('/StrukturOrganisasi', [WebsiteController::class, 'StrukturOrganisasi']);
Route::get('/InstalasiRawatJalan', [WebsiteController::class, 'InstalasiRawatJalan']);
Route::get('/InstalasiRawatdarurat', [WebsiteController::class, 'InstalasiRawatdarurat']);
Route::get('/InstalasiRawatInap', [WebsiteController::class, 'InstalasiRawatInap']);
Route::get('/InstalasiLab', [WebsiteController::class, 'InstalasiLab']);
Route::get('/InstalasiRadiologi', [WebsiteController::class, 'InstalasiRadiologi']);
Route::get('/InstalasiFarmasi', [WebsiteController::class, 'InstalasiFarmasi']);
Route::get('/InstalasiCareUnit', [WebsiteController::class, 'InstalasiCareUnit']);
Route::get('/InstalasiNonMedik', [WebsiteController::class, 'InstalasiNonMedik']);
