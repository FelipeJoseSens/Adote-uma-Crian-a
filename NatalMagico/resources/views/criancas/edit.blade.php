@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Criança</h1>
    <form action="{{ route('criancas.update', $crianca) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $crianca->nome) }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required>{{ old('descricao', $crianca->descricao) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto (URL)</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{ old('foto', $crianca->foto) }}">
        </div>
        <div class="mb-3">
            <label for="presente_desejado" class="form-label">Presente Desejado</label>
            <input type="text" class="form-control" id="presente_desejado" name="presente_desejado" value="{{ old('presente_desejado', $crianca->presente_desejado) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
