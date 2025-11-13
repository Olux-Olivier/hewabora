<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});


Route::get('/lounge/foods', [ProductController::class, 'loungeFoods'])->name('lounge.foods');
Route::get('/lounge/drinks', [ProductController::class, 'loungeDrinks'])->name('lounge.drinks');

// === Night ===
Route::get('/night/foods', [ProductController::class, 'nightFoods'])->name('night.foods');
Route::get('/night/drinks', [ProductController::class, 'nightDrinks'])->name('night.drinks');
Route::get('/qrcode', [QrController::class, 'show'])->name('qrcode');

Route::get('/loungeRestaurant', function () {
    return view('RestaurantNightClub');
});

Route::get('/form', function () {
    return view('formAddProduct');
});

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::put('/products/{product}',[ProductController::class, 'update'])->name('products.update');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard.home');

// Lounge
Route::get('/dashboard/lounge/foods', [ProductController::class, 'dashloungeFoods'])->name('dashboard.lounge.foods');

Route::get('/dashboard/lounge/drinks', [ProductController::class, 'dashLoungeDrinks'])->name('dashboard.lounge.drinks');

// Night
Route::get('/dashboard/night/foods', [ProductController::class, 'dashnightFoods'])->name('dashboard.night.foods');

Route::get('/dashboard/night/drinks', [ProductController::class, 'dashNightDrinks'])->name('dashboard.night.drinks');


Route::delete('/delete/{product}',[ProductController::class, 'destroy'])->name('products.destroy');

