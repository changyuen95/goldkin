<?php

use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/enquiry/submit', [EnquiryController::class, 'store'])->name('enquiry.submit');
