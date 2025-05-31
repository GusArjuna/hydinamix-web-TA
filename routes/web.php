<?php

use App\Http\Controllers\ComproController;
use Illuminate\Support\Facades\Route;

Route::controller(ComproController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/team', 'team');
    Route::get('/testimonials', 'testimonials');
    Route::get('/contact', 'contact');
});
