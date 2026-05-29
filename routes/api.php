<?php

use App\Http\Controllers\Api\DonationApiController;
use App\Http\Middleware\VerifyApiKey;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| All routes here are loaded by the RouteServiceProvider with the "api"
| middleware group and an "/api" URL prefix.
|
*/

Route::middleware(VerifyApiKey::class)->group(function () {
    Route::get('/donations', [DonationApiController::class, 'index'])
        ->name('api.donations.index');

    Route::post('/donations', [DonationApiController::class, 'store'])
        ->name('api.donations.store');
});
