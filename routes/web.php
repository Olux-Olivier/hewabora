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
