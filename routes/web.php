<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
});
