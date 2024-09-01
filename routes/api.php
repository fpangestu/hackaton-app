<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CorsMiddleware;

Route::middleware([CorsMiddleware::class])->group(function () {
    // Route for the home page (Beranda)
    Route::get('/', function () {
        return view('welcome'); // This should point to your home page view
    })->name('home');

    // Route for the "Perjalanan" page
    Route::get('/perjalanan', function () {
        return view('perjalanan'); // Ensure you have an 'about.blade.php' view
    })->name('perjalanan');

    // Route for the "LaporPak" page
    Route::get('/laporpak', function () {
        return view('laporpak'); // Ensure you have a 'service.blade.php' view
    })->name('laporpak');

    // Route for the "Status" page (can be the same as LaporPak if intended)
    Route::get('/status', function () {
        return view('status'); // Ensure you have a 'status.blade.php' view
    })->name('status');
});