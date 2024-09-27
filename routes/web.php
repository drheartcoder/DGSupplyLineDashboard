<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstallerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\Authenticate;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('installers', InstallerController::class);
    Route::resource('managers', ManagerController::class);
});
