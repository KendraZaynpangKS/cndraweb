<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/candra', function() {
    return view('candra');
});

Route::get('/tentang', function() {
    return view('tentang');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});


require __DIR__.'/settings.php';
