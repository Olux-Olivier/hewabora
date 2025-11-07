<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/', function () {
    return view('welcome');
});

// Page HTML du menu (statique)
Route::get('/menu', function () {
    return view('menu'); // affichera la vue menu.blade.php
});

Route::get('/lounge-restaurant', function () {
    return view('loungeRestaurant'); // affichera la vue menu loungeRestaurant.blade.php
});

Route::get('/night-club', function () {
    return view('nightClub'); // affichera la vue menu nightClub.blade.php
});

// Page qui affiche le QR code
Route::get('/qrcode', [QrController::class, 'show'])->name('qrcode');



