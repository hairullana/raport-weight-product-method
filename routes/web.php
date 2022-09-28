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

Route::('/', function () {
    if (Auth::guard('admin')->check()) return redirect()->route('admin.index');
    elseif (Auth::guard('guru')->check()) return redirect()->route('guru.index');
    else return redirect()->route('auth.login');
});

Route::group(['controller' => AuthController::class, 'prefix' => '/auth', 'as' => 'auth.'], function () {
    Route::group(['middleware' => 'guest:admin,guru'], function () {
        Route::('/login', 'login')->name('login');
        Route::post('/login', 'loginAction')->name('login-action');
    });
    Route::group(['middleware' => 'auth:admin,guru'], function () {
        Route::('/logout', 'logout')->name('logout');
    });
});

Route::group(['controller' => AdminController::class, 'prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'auth:admin'], function () {
    Route::('/', 'index')->name('index');
    Route::('/daftar-siswa', 'daftarSiswa')->name('daftar-siswa');
    Route::('/daftar-siswa/tambah/{kelas}', 'tambahSiswa')->name('tambah-siswa');
    Route::post('/daftar-siswa/tambah/{kelas}', 'tambahSiswaAction')->name('tambah-siswa-action');
    Route::('/daftar-siswa/{kelas}', 'daftarSiswaDetail')->name('daftar-siswa-detail');
    Route::('/perhitungan', 'perhitungan')->name('perhitungan');
    Route::('/perhitungan/{kelas}', 'perhitunganDetail')->name('perhitungan-action');
    Route::('/nilai/update/{siswa_id}', 'updateNilai')->name('update-nilai');
    Route::post('/nilai/update/{siswa_id}', 'updateNilaiAction')->name('update-nilai-action');
    Route::('/siswa-berprestasi', 'siswaBerprestasi')->name('siswa-berprestasi');
    Route::('/siswa-berprestasi/{kelas}', 'siswaBerprestasiDetail')->name('siswa-berprestasi-detail');
    Route::('/siswa/hapus/{siswa_id}', 'hapusSiswa')->name('hapus-siswa');
    Route::('/siswa/edit/{siswa_id}', 'editSiswa')->name('edit-siswa');
    Route::post('/siswa/edit/{siswa_id}', 'editSiswaAction')->name('edit-siswa-action');
    Route::('/siswa/status/{siswa_id}', 'updateSiswaStatus')->name('edit-siswa-status');
    Route::('/siswa/{siswa_id}/{juara?}', 'dataSiswa')->name('data-siswa');
    Route::('/users', 'users')->name('users');
    Route::('/users/{id}', 'editGuru')->name('edit-user');
    Route::post('/users/{id}', 'editGuruAction')->name('edit-user-action');
    Route::('/mode-lengkap/{kelas}', 'modeLengkap')->name('mode-lengkap');
});

Route::group(['controller' => GuruController::class, 'prefix' => '/guru', 'as' => 'guru.', 'middleware' => 'auth:guru'], function () {
    Route::('/', 'index')->name('index');
    Route::('/daftar-siswa', 'daftarSiswa')->name('daftar-siswa');
    Route::('/nilai/update/{siswa_id}', 'updateNilai')->name('update-nilai');
    Route::post('/nilai/update/{siswa_id}', 'updateNilaiAction')->name('update-nilai-action');
    Route::('/perhitungan', 'perhitungan')->name('perhitungan');
    Route::('/perhitungan/{kelas}', 'perhitunganDetail')->name('perhitungan-action');
    Route::('/siswa-berprestasi', 'siswaBerprestasi')->name('siswa-berprestasi');
    Route::('/siswa/{siswa_id}/{juara?}', 'dataSiswa')->name('data-siswa');
});

Route::('/print/{kelas}', [AdminController::class, 'print'])->name('print')->middleware('auth:admin,guru');
