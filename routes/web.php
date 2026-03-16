<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\RsvpController;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Wishes
Route::get('/wishes', [WishController::class, 'index'])->name('wishes');
Route::get('/wishes/showcase', [WishController::class, 'showcase'])->name('wishes.showcase');
Route::post('/wishes', [WishController::class, 'store'])->name('wishes.store');

// Donate
Route::get('/donate', [DonateController::class, 'index'])->name('donate');
Route::post('/donate/confirm', [DonateController::class, 'confirm'])->name('donate.confirm');
Route::get('/donate/thank-you', [DonateController::class, 'thankYou'])->name('donate.thankyou');

// Additional pages (can be added later)
Route::get('/our-story', function () {
    return view('story');
})->name('story');

Route::get('/rsvp', [RsvpController::class, 'index'])->name('rsvp');
Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');
