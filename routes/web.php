<?php

use App\Http\Controllers\MainApp\HomepageController;
use App\Http\Controllers\MainApp\PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::prefix('/')->controller(HomepageController::class)->group(function () {
    Route::get('', 'index')->name('homepage');
    Route::get('about', 'about')->name('about');
    // Route::get('governance', 'governance')->name('governance');
    Route::get('events', 'events')->name('events');
    Route::get('blog', 'blog')->name('blog');
    Route::get('contact', 'contact')->name('contact');
    // Route::get('membership', 'membership')->name('membership');
    Route::get('membership-registration', 'membership_reg')->name('membership.reg');

    Route::controller(PaymentController::class)->group(function () {
        // Route::get('/membership', fn() => view('membership.form'))->name('membership.form');
        Route::post('/payment/initiate', 'initiate')->name('payment.initiate');
        Route::get('/payment/callback', 'callback')->name('payment.callback');
        // Route::get('/membership/success', fn() => 'Payment Successful!')->name('membership.success');
    });
});


