<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/smarttools', function () {
    return view('index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AdminController::class, 'login'])->name('login');
    Route::post('/admin/login/auth', [AdminController::class, 'auth'])->name('admin.auth');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });

// Route::middleware(['auth'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     Route::post('/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
//     Route::delete('/user/{id}', [AdminController::class, 'deleteUser'])->name('admin.user.delete');
// });