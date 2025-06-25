@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow" style="background: #fffbe7; border-radius: 18px;">
                <div class="card-body">
                    <h3 class="mb-4 text-center" style="color: #ff69b4; font-family: 'Comic Sans MS', cursive, sans-serif;">Editar Criança</h3>
                    <form method="POST" action="{{ url('/criancas/' . $crianca->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                            @if($crianca->foto)
                                <div class="mt-2">
                                    <img src="{{ $crianca->foto }}" alt="Foto atual" width="120">
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $crianca->nome }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="idade" class="form-label">Idade</label>
                            <input type="number" class="form-control" id="idade" name="idade" min="0" max="17" value="{{ $crianca->idade }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="2" required>{{ $crianca->descricao }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="presente_desejado" class="form-label">Presente de Natal Desejado</label>
                            <input type="text" class="form-control" id="presente_desejado" name="presente_desejado" value="{{ $crianca->presente_desejado }}" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
