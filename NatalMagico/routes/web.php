<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriancaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/conheca-nossas-criancas', [CriancaController::class, 'index']);
Route::get('/adote-uma-crianca', [CriancaController::class, 'random']);
