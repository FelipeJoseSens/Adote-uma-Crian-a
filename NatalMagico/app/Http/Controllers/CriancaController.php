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
        if (!$crianca) {
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
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0|max:17',
            'descricao' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'presente_desejado' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('criancas', 'public');
            $validated['foto'] = '/storage/' . $path;
        }

        Crianca::create($validated);
        return redirect('/conheca-nossas-criancas')->with('success', 'Criança cadastrada com sucesso!');
    }

    public function edit(Crianca $crianca)
    {
        return view('criancas.edit', compact('crianca'));
    }

    public function update(Request $request, Crianca $crianca)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required',
            'foto' => 'nullable|string',
            'presente_desejado' => 'required|string|max:255',
        ]);
        $crianca->update($validated);
        return redirect('/conheca-nossas-criancas')->with('success', 'Criança atualizada com sucesso!');
    }

    public function destroy(Crianca $crianca)
    {
        $crianca->delete();
        return redirect('/conheca-nossas-criancas')->with('success', 'Criança removida com sucesso!');
    }
}
