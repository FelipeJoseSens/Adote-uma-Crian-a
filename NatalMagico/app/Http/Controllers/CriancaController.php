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
        if (!$crianca) {
            return response()->json(['error' => 'Nenhuma criança encontrada'], 404);
        }
        return view('adote-uma-crianca', compact('crianca'));
    }

    public function create()
    {
        return view('criancas.create');
    }

    // Método para salvar a criança
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
            'descricao' => 'required|string',
            'presente_desejado' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('criancas', 'public');
            $data['foto'] = $path;
        }

        Crianca::create($data);

        return redirect('/conheca-nossas-criancas')->with('success', 'Criança cadastrada com sucesso!');
    }
}
