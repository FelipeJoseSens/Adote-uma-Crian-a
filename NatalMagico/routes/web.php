<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CriancaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/conheca-nossas-criancas', [CriancaController::class, 'index']);
Route::get('/adote-uma-crianca', [CriancaController::class, 'random'])->name('adocao.random');
