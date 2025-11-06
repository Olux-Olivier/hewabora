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

// Page qui affiche le QR code
Route::get('/qrcode', [QrController::class, 'show'])->name('qrcode');



