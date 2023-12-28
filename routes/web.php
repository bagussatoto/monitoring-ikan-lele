<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardHistoryController;

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

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::resource('/dashboard/controls', DashboardHistoryController::class)->middleware('auth');
Route::get('/dashboard/cetak', [DashboardHistoryController::class, 'cetak'])->middleware('auth');

Route::get('/bacasuhu', [MonitoringController::class, 'bacasuhu'])->middleware('auth');
Route::get('/bacakekeruhan', [MonitoringController::class, 'bacakekeruhan'])->middleware('auth');
Route::get('/bacaph', [MonitoringController::class, 'bacaph'])->middleware('auth');
Route::get('/bacajarak', [MonitoringController::class, 'bacajarak'])->middleware('auth');
Route::get('/bacapompamasuk', [MonitoringController::class, 'bacapompamasuk'])->middleware('auth');
Route::get('/bacapompakeluar', [MonitoringController::class, 'bacapompakeluar'])->middleware('auth');

// Route untuk menyimpan nilai sensor ke database
Route::get('/simpan/{temperature}/{turbidity}/{ph}/{jarak}/{pompa_masuk}/{pompa_keluar}', [MonitoringController::class, 'simpan']);