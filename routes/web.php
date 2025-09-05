<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/amenities', function () {
    return view('amenities');
})->name('amenities');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/offers', function () {
    return view('offers');
})->name('offers');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/restaurant', function () {
    return view('restaurant');
})->name('restaurant');

Route::get('/room-details', function () {
    return view('room-details');
})->name('room-details');

Route::get('/roms', function () {
    return view('rooms');
})->name('rooms');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/starte-page', function () {
    return view('starter-page');
})->name('starter-page');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
