@extends('layouts.app')
@section('title', 'Conheça Nossas Crianças')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Conheça Nossas Crianças</h1>
    <div class="row">
        @forelse($criancas as $crianca)
        <div class="col-md-4 mb-4">
            <div class="card h-100 @if(!$crianca->is_active) opacity-50 @endif">
                <img src="{{ asset('storage/' . $crianca->foto) }}" class="card-img-top" alt="Foto de {{ $crianca->nome }}" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $crianca->nome }} ({{ $crianca->idade }} anos)</h5>
                    @if(!$crianca->is_active)
                        <span class="badge bg-warning text-dark mb-2">Cadastro Inativo</span>
                    @endif
                    <p class="card-text">{{ $crianca->descricao }}</p>
                    <p class="text-success"><strong>Deseja ganhar:</strong> {{ $crianca->presente_desejado }}</p>

                    @auth
                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('admin.criancas.edit', $crianca->id) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('admin.criancas.toggleActive', $crianca->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm {{ $crianca->is_active ? 'btn-secondary' : 'btn-info' }}">
                                {{ $crianca->is_active ? 'Desativar' : 'Ativar' }}
                            </button>
                        </form>

                        <form action="{{ route('admin.criancas.destroy', $crianca->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
        @empty
            <div class="col-12">
                <p class="text-center">Nenhuma criança cadastrada no momento.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
