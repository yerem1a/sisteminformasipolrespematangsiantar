<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
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
    return view('index');
})->name('home');

// Menampilkan formulir laporan
Route::get('/laporan-form', [LaporanController::class, 'showForm'])->name('laporan.form');

// Menangani submit formulir laporan
Route::post('/laporan-submit', [LaporanController::class, 'submitForm'])->name('laporan.submit');

// Rute untuk login dan logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.auth.login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});
