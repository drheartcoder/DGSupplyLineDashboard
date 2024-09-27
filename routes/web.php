<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstallerController;
use App\Http\Controllers\ManagerController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('installers', InstallerController::class);
Route::resource('managers', ManagerController::class);
