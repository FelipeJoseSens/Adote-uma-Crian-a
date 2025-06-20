<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriancaController;
use App\Http\Controllers\AuthController; // Adicionado
use App\Http\Controllers\AdminCriancaController; // Adicionado

// Rotas Públicas
Route::get('/', function () {
    return view('home');
});

Route::get('/conheca-nossas-criancas', [CriancaController::class, 'index'])->name('criancas.index');
Route::get('/adote-uma-crianca', [CriancaController::class, 'random']);

// Rotas de Autenticação
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rotas de Gerenciamento (Protegidas)
Route::middleware('auth')->group(function () {
    Route::get('/admin/criancas/create', [AdminCriancaController::class, 'create'])->name('admin.criancas.create');
    Route::post('/admin/criancas', [AdminCriancaController::class, 'store'])->name('admin.criancas.store');
    Route::get('/admin/criancas/{crianca}/edit', [AdminCriancaController::class, 'edit'])->name('admin.criancas.edit');
    Route::put('/admin/criancas/{crianca}', [AdminCriancaController::class, 'update'])->name('admin.criancas.update');
    Route::delete('/admin/criancas/{crianca}', [AdminCriancaController::class, 'destroy'])->name('admin.criancas.destroy');
    Route::patch('/admin/criancas/{crianca}/toggle-active', [AdminCriancaController::class, 'toggleActive'])->name('admin.criancas.toggleActive');
});
