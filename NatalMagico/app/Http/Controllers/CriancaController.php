<?php

namespace App\Http\Controllers;

use App\Models\Crianca;
use Illuminate\Http\Request;

class CriancaController extends Controller
{
    public function index()
    {
        $criancas = Crianca::all();
        return view('conheca-nossas-criancas', ['criancas' => $criancas]);
    }

    public function random()
    {
        $crianca = Crianca::inRandomOrder()->first();
        if(!$crianca) {
            return response()->json(['error' => 'Nenhuma criança encontrada'], 404);
        }
        return view('adote-uma-crianca', compact('crianca'));
    }


    public function create()
    {
        return view('criancas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
            'descricao' => 'required|string',
            'presente_desejado' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $dados = $request->all();

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('criancas', 'public');
            $dados['foto'] = $path;
        }

        Crianca::create($dados);

        return redirect()->route('criancas.create')->with('success', 'Criança cadastrada com sucesso!');
    }
}
