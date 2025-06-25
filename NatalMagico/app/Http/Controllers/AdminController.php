<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Mostra a tela de login do administrador.
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Processa a tentativa de login do administrador.
     */
    public function login(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string',
        ]);

        if ($request->codigo === '006655') {
            // Define a sessão para indicar que é um administrador
            Session::put('is_admin', true);
            return redirect('/conheca-nossas-criancas')->with('success', 'Acesso de administrador liberado!');
        }

        return back()->withErrors(['codigo' => 'O código de administrador está incorreto.']);
    }

    /**
     * Realiza o logout do modo administrador.
     */
    public function logout()
    {
        // Remove a sessão de administrador
        Session::forget('is_admin');
        return redirect('/')->with('success', 'Você saiu do modo administrador.');
    }
}
