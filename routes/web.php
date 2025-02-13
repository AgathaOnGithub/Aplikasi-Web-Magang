<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Halaman utama mengarah ke dashboard.index
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// Route Internships
Route::get('/internships', [InternshipController::class, 'index'])->name('internships.index');
Route::get('/internships/{internship}', [InternshipController::class, 'show'])->name('internships.show');

// Route Tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Route Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Route Users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
