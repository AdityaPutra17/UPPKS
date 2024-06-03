<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('user.profile') ;
})-> name('profile');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event-page', [HomeController::class, 'showEvent']) -> name('event-page');


Route::get('/event/{id}', [HomeController::class, 'detailEvent'])->name('userevent.show');
Route::get('/product-page', [HomeController::class, 'showProduct'])->name('product-page');
Route::get('/product-page/{kategori}', [HomeController::class, 'filterProducts'])->name('product-kategori');
Route::get('/product/{id}', [HomeController::class, 'detailProduct'])->name('userproduct.show');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
    Route::resource('admin/product', ProductsController::class);
    Route::resource('admin/event', EventController::class);
});
