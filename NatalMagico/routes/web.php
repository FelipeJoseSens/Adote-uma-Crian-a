<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CriancaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/conheca-nossas-criancas', [CriancaController::class, 'index']);
Route::get('/adote-uma-crianca', [CriancaController::class, 'random']);

Route::middleware('auth')->group(function () {
    Route::get('/criancas/create', [CriancaController::class, 'create']);
    Route::post('/criancas', [CriancaController::class, 'store']);
});

require __DIR__.'/auth.php';
