<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $crianca->nome ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="idade" class="form-label">Idade</label>
    <input type="number" class="form-control" id="idade" name="idade" value="{{ old('idade', $crianca->idade ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ old('descricao', $crianca->descricao ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="presente_desejado" class="form-label">Presente Desejado</label>
    <input type="text" class="form-control" id="presente_desejado" name="presente_desejado" value="{{ old('presente_desejado', $crianca->presente_desejado ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input class="form-control" type="file" id="foto" name="foto">
    @if(isset($crianca) && $crianca->foto)
    <div class="mt-2">
        <small>Foto atual:</small>
        <img src="{{ asset('storage/' . $crianca->foto) }}" alt="Foto de {{ $crianca->nome }}" width="100">
    </div>
    @endif
</div>
