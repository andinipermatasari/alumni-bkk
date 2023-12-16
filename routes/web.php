<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\UserController;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('/protected-route', function () {
    // Logic for protected route
})->middleware('customAuth');


// Route::get('/index1', function() {
//     return view('index1');
// });
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/perusahaan', [DashboardController::class, 'perusahaan']);
Route::get('/lamaran', [DashboardController::class, 'lamaran']);
Route::get('/lowongan', [DashboardController::class, 'lowongan']);
Route::get('/alumni', [DashboardController::class, 'alumni']);

// Route::get('/login', [UserController::class, 'showLoginForm'])->name('/login');
// Route::post('/login', [UserController::class, 'login']);

Route::get('/login', [LoginController::class, 'halamanlogin']);
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/profile', [LoginController::class, 'profile']);
Route::get('/profileadmin', [LoginController::class, 'profileadmin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/logoutadmin', [LoginController::class, 'logoutadmin']);

Route::get('/loginadmin', [LoginController::class, 'loginadmin']);
Route::post('/loginpost', [LoginController::class, 'loginpost'])->name('loginpost');
Route::get('/testimoni/showTestimoni', [TestimoniController::class, 'showTestimoni']);

Route::get('/perusahaann', [PerusahaanController::class, 'show']);
// Route::get('/perusahaan', [PerusahaanController::class, 'showw']);
Route::get('/perusahaan/add', [PerusahaanController::class, 'add']);
Route::post('/perusahaan/create', [PerusahaanController::class, 'create']);
Route::get('/perusahaan', [PerusahaanController::class, 'index']);
Route::get('/perusahaan/edit/{id}', [PerusahaanController::class, 'edit']);
Route::get('/perusahaan/delete/{id}', [PerusahaanController::class, 'delete']);

Route::get('/alumni', [AlumniController::class, 'show']);
Route::get('/alumni/add', [AlumniController::class, 'add']);
Route::post('/alumni/create', [AlumniController::class, 'create']);

Route::get('/testimoni', [TestimoniController::class, 'show']);
Route::get('/testimoni/add', [TestimoniController::class, 'add']);
Route::post('/testimoni/create', [TestimoniController::class, 'create']);
Route::get('/testimoni/show', [LoginController::class, 'testimoni']);

// Route::get('/lowongann', [UserController::class, 'show']);
// Route::get('/lowongan/add', [UserController::class, 'add']);
// Route::post('/lowongan/create', [UserController::class, 'create']);

Route::get('/lowongann', [LowonganController::class, 'show']);
Route::get('/lowongan/add', [LowonganController::class, 'add']);
Route::post('/lowongan/create', [LowonganController::class, 'create']);
Route::get('/lowongan', [LowonganController::class, 'hello']);
Route::get('/lowongan/lowonganAdmin', [LowonganController::class, 'addAdmin']);
