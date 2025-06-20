<?php

namespace App\Http\Controllers;

use App\Models\Crianca;
use Illuminate\Http\Request;

class CriancaController extends Controller
{
    public function index()
    {
        // Alterado para pegar todas, mas você pode filtrar por ativas se preferir
        // Para o admin ver todas, e o público só as ativas, a lógica pode ser mais complexa.
        // Por ora, vamos mostrar todas para o admin e só ativas para o público.
        if (auth()->check()) {
            $criancas = Crianca::all();
        } else {
            $criancas = Crianca::where('is_active', true)->get();
        }
        return view('conheca-nossas-criancas', ['criancas' => $criancas]);
    }

   public function random()
   {
        // Alterado para sortear apenas entre as crianças ativas
        $crianca = Crianca::where('is_active', true)->inRandomOrder()->first();

        if(!$crianca) {
            return view('adote-uma-crianca', ['crianca' => null]);
        }

        return view('adote-uma-crianca', compact('crianca'));
   }
}
