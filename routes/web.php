<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MerchantController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    });
    Route::middleware(['merchant'])->group(function () {
        Route::get('/merchant', [MerchantController::class, 'index'])->name('merchant.index');
    });

    Route::post('/createmerchant', [MerchantController::class, 'store'])->name('merchant.store');
});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__ . '/auth.php';
