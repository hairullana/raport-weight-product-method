<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;

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
    if (Auth::guard('admin')->check()) return redirect()->route('admin.index');
    elseif (Auth::guard('guru')->check()) return redirect()->route('guru.index');
    else return redirect()->route('auth.login');
});

Route::group(['controller' => AuthController::class, 'prefix' => '/auth', 'as' => 'auth.'], function () {
    Route::group(['middleware' => 'guest:admin,guru'], function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginAction')->name('login-action');
    });
    Route::group(['middleware' => 'auth:admin,guru'], function () {
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::group(['controller' => AdminController::class, 'prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/daftar-siswa', 'daftarSiswa')->name('daftar-siswa');
    Route::get('/daftar-siswa/tambah/{kelas}', 'tambahSiswa')->name('tambah-siswa');
    Route::post('/daftar-siswa/tambah/{kelas}', 'tambahSiswaAction')->name('tambah-siswa-action');
    Route::get('/daftar-siswa/{kelas}', 'daftarSiswaDetail')->name('daftar-siswa-detail');
    Route::get('/perhitungan', 'perhitungan')->name('perhitungan');
    Route::get('/perhitungan/{kelas}', 'perhitunganDetail')->name('perhitungan-action');
    Route::get('/nilai/update/{siswa_id}', 'updateNilai')->name('update-nilai');
    Route::post('/nilai/update/{siswa_id}', 'updateNilaiAction')->name('update-nilai-action');
    Route::get('/siswa-berprestasi', 'siswaBerprestasi')->name('siswa-berprestasi');
    Route::get('/siswa-berprestasi/{kelas}', 'siswaBerprestasiDetail')->name('siswa-berprestasi-detail');
    Route::get('/siswa/hapus/{siswa_id}', 'hapusSiswa')->name('hapus-siswa');
    Route::get('/siswa/edit/{siswa_id}', 'editSiswa')->name('edit-siswa');
    Route::post('/siswa/edit/{siswa_id}', 'editSiswaAction')->name('edit-siswa-action');
    Route::get('/siswa/status/{siswa_id}', 'updateSiswaStatus')->name('edit-siswa-status');
    Route::get('/siswa/{siswa_id}/{juara?}', 'dataSiswa')->name('data-siswa');
    Route::get('/users', 'users')->name('users');
    Route::get('/users/{id}', 'editGuru')->name('edit-user');
    Route::post('/users/{id}', 'editGuruAction')->name('edit-user-action');
    Route::get('/mode-lengkap/{kelas}', 'modeLengkap')->name('mode-lengkap');
});

Route::group(['controller' => GuruController::class, 'prefix' => '/guru', 'as' => 'guru.', 'middleware' => 'auth:guru'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/daftar-siswa', 'daftarSiswa')->name('daftar-siswa');
    Route::get('/nilai/update/{siswa_id}', 'updateNilai')->name('update-nilai');
    Route::post('/nilai/update/{siswa_id}', 'updateNilaiAction')->name('update-nilai-action');
    Route::get('/perhitungan', 'perhitungan')->name('perhitungan');
    Route::get('/perhitungan/{kelas}', 'perhitunganDetail')->name('perhitungan-action');
    Route::get('/siswa-berprestasi', 'siswaBerprestasi')->name('siswa-berprestasi');
    Route::get('/siswa/{siswa_id}/{juara?}', 'dataSiswa')->name('data-siswa');
});

Route::get('/print/{kelas}', [AdminController::class, 'print'])->name('print')->middleware('auth:admin,guru');
