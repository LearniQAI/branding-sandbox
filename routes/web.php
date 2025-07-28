<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandingController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-branding-email', [BrandingController::class, 'sendEmail']);

Route::get('/test-mail', function () {
    Mail::raw('Dit is een testmail van Laravel.', function ($message) {
        $message->to('jouw-email@example.com')
            ->subject('Test Mail');
    });

    return 'Test mail verstuurd!';
});
