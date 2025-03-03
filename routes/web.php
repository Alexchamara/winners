<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\CustomerController;


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

    Route::prefix('admin/customers')->name('admin.customers.')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('index');
        Route::post('/', [CustomerController::class, 'store'])->name('store');
        Route::put('/{customer}', [CustomerController::class, 'update'])->name('update');
        Route::delete('/{customer}', [CustomerController::class, 'destroy'])->name('destroy');
        // Route::post('/{customer}/toggle-winner', [CustomerController::class, 'toggleWinner'])->name('toggle-winner');
    });
    Route::post('/admin/customers/{customer}/toggle-winner', [App\Http\Controllers\CustomerController::class, 'toggleWinner'])
    ->name('admin.customers.toggle-winner');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    });
    Route::middleware(['merchant'])->group(function () {
        Route::get('/merchant', [MerchantController::class, 'index'])->name('merchant.index');
    });
    // Route::get('/createmerchant/form',[MerchantController::class,'index'])->name('merchant.index');
    Route::get('/createmerchant',[MerchantController::class,'store'])->name('merchant.store');

});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__ . '/auth.php';
