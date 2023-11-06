<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('show');
    Route::put('/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
});

Route::prefix('flower')->name('flower.')->group(function () {
    Route::get('/', [App\Http\Controllers\FlowerController::class, 'index'])->name('index');
    Route::get('/{flower}', [App\Http\Controllers\FlowerController::class, 'show'])->name('show');
});

Route::prefix('transaction')->name('transaction.')->group(function () {
    Route::get('/', [App\Http\Controllers\TransactionController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\TransactionController::class, 'create'])->name('create');
    Route::get('/{transaction}', [App\Http\Controllers\TransactionController::class, 'show'])->name('show');
    Route::post('/', [App\Http\Controllers\TransactionController::class, 'store'])->name('store');
});

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [App\Http\Controllers\CartController::class, 'index'])->name('index');
    Route::post('/', [App\Http\Controllers\CartController::class, 'store'])->name('store');
    Route::put('/{cart}', [App\Http\Controllers\CartController::class, 'update'])->name('update');
    Route::delete('/{cart}', [App\Http\Controllers\CartController::class, 'destroy'])->name('delete');
});



