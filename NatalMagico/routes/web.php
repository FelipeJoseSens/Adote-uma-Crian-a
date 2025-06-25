<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriancaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
});

Route::get('/conheca-nossas-criancas', [CriancaController::class, 'index'])->name('criancas.index');
Route::get('/adote-uma-crianca', [CriancaController::class, 'random']);

// Rotas de Administração
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Rotas para as ações de CRUD das crianças (protegidas por middleware no controller)
Route::middleware('auth')->group(function () {
    Route::get('/criancas/create', [CriancaController::class, 'create']);
    Route::post('/criancas', [CriancaController::class, 'store']);
    Route::get('/criancas/{crianca}/edit', [CriancaController::class, 'edit'])->name('criancas.edit');
    Route::put('/criancas/{crianca}', [CriancaController::class, 'update'])->name('criancas.update');
    Route::delete('/criancas/{crianca}', [CriancaController::class, 'destroy'])->name('criancas.destroy');
    Route::patch('/criancas/{crianca}/desativar', [CriancaController::class, 'deactivate'])->name('criancas.deactivate');
});
