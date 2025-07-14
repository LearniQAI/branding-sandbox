<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandingController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/branding-preview', [BrandingController::class, 'preview']);
