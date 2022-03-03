<?php

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

use App\Http\Controllers\Admin\DashboardController as Dashboard;
use App\Http\Controllers\User\PendaftaranController;
use App\Http\Controllers\User\CetakController;

use App\Http\Controllers\Admin\JurusanController as Jurusan;
use App\Http\Controllers\Admin\PendaftarController as Pendaftar;
use App\Http\Controllers\Admin\PembayaranController as Pembayaran;
use App\Http\Controllers\Admin\UserController as User;
use App\Http\Controllers\Admin\PasswordController as Password;

Route::get('/', [PendaftaranController::class, 'index']);
Route::get('/cetak/{id}', [CetakController::class, 'index']);
Route::get('/cetak-formulir/{id}', [CetakController::class, 'cetakformulir']);
Route::post('/cetak-formulir', [CetakController::class, 'formulir']);
Route::get('/cetak-formulir', [CetakController::class, 'viewformulir']);
Route::get('/cetak-tes', [CetakController::class, 'viewtes']);
Route::post('/cetak-tes', [CetakController::class, 'tes']);

Route::get('/cetak-data-pendaftar', [CetakController::class, 'exportpendaftar']);
Route::get('/cetak-data-sudah', [CetakController::class, 'exportsudah']);
Route::get('/cetak-data-belum', [CetakController::class, 'exportbelum']);
Route::get('/cetak-data-peruangan', [CetakController::class, 'exportruangan']);

Route::post('pendaftaran', [PendaftaranController::class, 'store']);
Route::get('cek', [PendaftaranController::class, 'cek']);
Route::get('selesai', [PendaftaranController::class, 'selesai']);
Route::get('clear_cache', function () {

    \Artisan::call('optimize');

    dd("Cache is cleared");

});
Route::get('migrate_refresh', function () {

    \Artisan::call('migrate:refresh --seed');

    dd("Cache is cleared");

});
Route::get('migrate', function () {

    \Artisan::call('migrate --seed');

    dd("Cache is cleared");

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => '', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');



    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [User::class, 'index'])->name('user');
        Route::get('/data', [User::class, 'show'])->name('user.data');
        Route::post('/store', [User::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [User::class, 'edit'])->name('user.edit');
        Route::post('/update', [User::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [User::class, 'destroy'])->name('user.delete');
    });
    Route::group(['prefix' => '/pendaftar'], function () {
        Route::get('/', [Pendaftar::class, 'index'])->name('pendaftar');
        Route::get('/data', [Pendaftar::class, 'show'])->name('pendaftar.data');
        Route::post('/store', [Pendaftar::class, 'store'])->name('pendaftar.store');
        Route::get('/edit/{id}', [Pendaftar::class, 'edit'])->name('pendaftar.edit');
        Route::post('/update', [Pendaftar::class, 'update'])->name('pendaftar.update');
        Route::get('/delete/{id}', [Pendaftar::class, 'destroy'])->name('pendaftar.delete');
        Route::get('/membayar/{id}', [Pendaftar::class, 'membayar'])->name('pendaftar.membayar');
    });
    Route::group(['prefix' => '/jurusan'], function () {
        Route::get('/', [Jurusan::class, 'index'])->name('jurusan');
        Route::get('/data', [Jurusan::class, 'show'])->name('jurusan.data');
        Route::post('/store', [Jurusan::class, 'store'])->name('jurusan.store');
        Route::get('/edit/{id}', [Jurusan::class, 'edit'])->name('jurusan.edit');
        Route::post('/update', [Jurusan::class, 'update'])->name('jurusan.update');
        Route::get('/delete/{id}', [Jurusan::class, 'destroy'])->name('jurusan.delete');
    });
    Route::group(['prefix' => '/pembayaran'], function () {
        Route::get('/', [Pembayaran::class, 'index'])->name('pembayaran');
        Route::get('/data', [Pembayaran::class, 'show'])->name('pembayaran.data');
        Route::post('/store', [Pembayaran::class, 'store'])->name('pembayaran.store');
        Route::get('/edit/{id}', [Pembayaran::class, 'edit'])->name('pembayaran.edit');
        Route::post('/update', [Pembayaran::class, 'update'])->name('pembayaran.update');
        Route::get('/delete/{id}', [Pembayaran::class, 'destroy'])->name('pembayaran.delete');
    });

    Route::post('/gantipass', [Password::class, 'ganti'])->name('password.ganti');


});
