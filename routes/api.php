<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandingController;

Route::post('/branding-preview', [BrandingController::class, 'preview']);
