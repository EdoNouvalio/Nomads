<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TravelPackageController;
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

Route::get('/', [App\http\controllers\HomeController::class, 'index'])->name('home');

Route::get('/detail/{slug}', [App\http\controllers\DetailController::class, 'index'])->name('detail');

// Route::get('/checkout', [App\http\controllers\CheckoutController::class, 'index'])->name('checkout');
// Route::get('/checkout/success', [App\http\controllers\CheckoutController::class, 'success'])->name('success');
Route::post('/checkout/{id}', [App\http\controllers\CheckoutController::class, 'process'])
    ->name('checkout_process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}', [App\http\controllers\CheckoutController::class, 'index'])
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{details_id}', [App\http\controllers\CheckoutController::class, 'create'])
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', [App\http\controllers\CheckoutController::class, 'remove'])
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', [App\http\controllers\CheckoutController::class, 'success'])
    ->name('success')
    ->middleware(['auth','verified']);

Route::prefix('admin')->namespace('Admin')->middleware(['auth','admin'])->group(function () {
    Route::get ('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
    ->name('dashboard');
});

Route::resource('travel-package', TravelPackageController::class);

Route::resource('gallery', GalleryController::class);

Route::resource('transaction', TransactionController::class);

Auth::routes(['verify' => true]);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
