<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', 'home');

Route::get('home', function () {
    return Inertia::render('Home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('error', function () {
    return Inertia::render('Restricted');
})->name('error');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
