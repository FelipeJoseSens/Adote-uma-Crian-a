<?php

namespace App\Http\Controllers;

use App\Models\Crianca;
use Illuminate\Http\Request;

class CriancaController extends Controller
{
    /**
     * Adiciona um construtor para proteger as rotas de admin.
     */
    public function __construct()
    {
        // Aplica o middleware de verificação de admin para os métodos especificados
        $this->middleware(function ($request, $next) {
            if (!session('is_admin')) {
                abort(403, 'Acesso não autorizado.');
            }
            return $next($request);
        })->only(['edit', 'destroy', 'deactivate']);
    }

    public function index()
    {
        $criancas = Crianca::all();
        return view('conheca-nossas-criancas', ['criancas' => $criancas]);
    }

   public function random()
    {
        $crianca = Crianca::inRandomOrder()->first();

        if(!$crianca) {
            return view('adote-uma-crianca', compact('crianca'));
        }

        return view('adote-uma-crianca', compact('crianca'));
    }

    /**
     * Mostra o formulário para editar uma criança.
     */
    public function edit(Crianca $crianca)
    {
        return view('criancas.edit', compact('crianca'));
    }

    /**
     * Atualiza os dados da criança, incluindo upload de imagem.
     */
    public function update(Request $request, Crianca $crianca)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0|max:17',
            'descricao' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'presente_desejado' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto')) {
            // Remove a foto antiga se existir
            if ($crianca->foto && \Storage::disk('public')->exists(str_replace('/storage/', '', $crianca->foto))) {
                \Storage::disk('public')->delete(str_replace('/storage/', '', $crianca->foto));
            }
            $path = $request->file('foto')->store('criancas', 'public');
            $validated['foto'] = '/storage/' . $path;
        }

        $crianca->update($validated);
        return redirect('/conheca-nossas-criancas')->with('success', 'Criança atualizada com sucesso!');
    }

    /**
     * Remove uma criança do banco de dados.
     */
    public function destroy(Crianca $crianca)
    {
        // Lógica para excluir a criança
        return redirect()->route('criancas.index')->with('success', "Criança " . $crianca->nome . " EXCLUÍDA com sucesso! (Funcionalidade de exemplo)");
    }

    /**
     * Desativa o cadastro de uma criança.
     */
    public function deactivate(Crianca $crianca)
    {
        // Lógica para desativar a criança
        return redirect()->route('criancas.index')->with('success', "Criança " . $crianca->nome . " DESATIVADA com sucesso! (Funcionalidade de exemplo)");
    }
}
