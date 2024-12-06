<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Login dan Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Dashboard
Route::middleware('auth.session')->group(function () {
    Route::get('/dashboard-rumah-sakit', [DashboardController::class, 'rumahSakit'])->name('dashboard.rumahSakit');
    Route::get('/dashboard-rumah-makan', [DashboardController::class, 'rumahMakan'])->name('dashboard.rumahMakan');
    Route::get('/dashboard-toko', [DashboardController::class, 'toko'])->name('dashboard.toko');
});
