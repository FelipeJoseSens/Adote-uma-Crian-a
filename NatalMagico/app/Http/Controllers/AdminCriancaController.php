<?php

namespace App\Http\Controllers;

use App\Models\Crianca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCriancaController extends Controller
{
    public function create()
    {
        return view('admin.criancas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
            'descricao' => 'required|string',
            'presente_desejado' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('criancas', 'public');
        }

        Crianca::create($data);

        return redirect()->route('criancas.index')->with('success', 'Criança cadastrada com sucesso!');
    }

    public function edit(Crianca $crianca)
    {
        return view('admin.criancas.edit', compact('crianca'));
    }

    public function update(Request $request, Crianca $crianca)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
            'descricao' => 'required|string',
            'presente_desejado' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Apaga a foto antiga, se existir
            if ($crianca->foto) {
                Storage::disk('public')->delete($crianca->foto);
            }
            $data['foto'] = $request->file('foto')->store('criancas', 'public');
        }

        $crianca->update($data);

        return redirect()->route('criancas.index')->with('success', 'Dados da criança atualizados com sucesso!');
    }

    public function destroy(Crianca $crianca)
    {
        if ($crianca->foto) {
            Storage::disk('public')->delete($crianca->foto);
        }
        $crianca->delete();

        return redirect()->route('criancas.index')->with('success', 'Criança removida com sucesso!');
    }

    public function toggleActive(Crianca $crianca)
    {
        $crianca->is_active = !$crianca->is_active;
        $crianca->save();

        $message = $crianca->is_active ? 'Criança ativada com sucesso!' : 'Criança desativada com sucesso!';

        return redirect()->route('criancas.index')->with('success', $message);
    }
}
