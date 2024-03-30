<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Rute untuk login dan logout admin
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.auth.login');
Route::post('/login', [AuthController::class, 'adminLogin']); // Mengubah login menjadi adminLogin
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    // Rute untuk admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::post('/admin/status-laporan', [LaporanController::class, 'updateisCheck'])->name('admin.statuslaporan');
    Route::get('/user/status-laporan', [UserController::class, 'statusLaporan'])->name('user.statuslaporan');
});


// Rute untuk registrasi, login, dan logout pengguna (user)
Route::get('/register', [AuthController::class, 'userRegistrationForm'])->name('user.register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/user/login', [AuthController::class, 'userLoginForm'])->name('user.login');
Route::post('/user/login', [AuthController::class, 'userLogin']);
Route::post('/user/logout', [AuthController::class, 'logout'])->name('user.logout');
