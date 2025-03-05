<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', 'home');

Route::get('home', function () {
    return Inertia::render('Home');
})->middleware(['auth', 'verified'])->name('home');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
