@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Adote uma Criança</h2>
    @if(isset($crianca))
        <div class="card mx-auto" style="max-width: 400px;">
            @if($crianca->foto)
                <img src="{{ $crianca->foto }}" class="card-img-top" alt="Foto de {{ $crianca->nome }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $crianca->nome }}</h5>
                <p class="card-text">{{ $crianca->descricao }}</p>
                <p class="card-text"><strong>Presente desejado:</strong> {{ $crianca->presente_desejado }}</p>
                <a href="/adote-uma-crianca" class="btn btn-success mt-3">Quero Adotar Outra Criança</a>
            </div>
        </div>
    @else
        <p class="text-center">Nenhuma criança disponível para adoção no momento.</p>
    @endif
</div>
@endsection
