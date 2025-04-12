<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincp\AuthController;
use App\Http\Controllers\Admincp\HomeController;

Route::get('/admincp/auth', [AuthController::class, 'index'])->name('admin_auth_login');
Route::prefix('admincp')
->middleware('admincp') // Apply the 'admincp' middleware
->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin_dashboard');
});