<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', 'home');

Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::post('home', [HomeController::class, 'newTask'])->name('task.store');
});

Route::get('error', function () {
    return Inertia::render('Restricted');
})->name('error');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
