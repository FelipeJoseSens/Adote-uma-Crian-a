<?php

namespace App\Http\Controllers;

use App\Models\Crianca;
use Illuminate\Http\Request;

class CriancaController extends Controller
{
    public function index()
    {
        $criancas = Crianca::all();
        return view('conheca-nossas-criancas', ['criancas' => $criancas]); // Note o nome da variável
    }

   public function random()
{
    $crianca = Crianca::inRandomOrder()->first();

    // Debug (remova após teste)
    if(!$crianca) {
        return response()->json(['error' => 'Nenhuma criança encontrada'], 404);
    }

    return view('adote-uma-crianca', compact('crianca'));
}
}
