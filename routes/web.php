<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/predictions', [PredictionController::class, 'store'])->name('predictions.store');
    Route::get('/quiniela/show', [QuinielaController::class, 'show'])->name('quiniela.show');
});
