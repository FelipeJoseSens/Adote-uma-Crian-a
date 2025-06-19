@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-center flex-grow-1" style="color: #ff69b4; font-family: 'Comic Sans MS', cursive, sans-serif;">Conheça Nossas Crianças</h2>
        <a href="{{ url('/criancas/create') }}" class="btn btn-warning shadow" style="background: #ffd966; color: #6d4c41; font-weight: bold;">+ Incluir Criança</a>
    </div>
    <div class="row">
        @forelse($criancas as $crianca)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow" style="background: #fffbe7; border-radius: 18px;">
                    @if($crianca->foto)
                        <img src="{{ $crianca->foto }}" class="card-img-top" alt="Foto de {{ $crianca->nome }}" style="object-fit: cover; height: 250px; border-top-left-radius: 18px; border-top-right-radius: 18px;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title" style="color: #4fc3f7;">{{ $crianca->nome }}</h5>
                        <p class="card-text"><strong>Idade:</strong> {{ $crianca->idade ?? '-' }}</p>
                        <p class="card-text">{{ $crianca->descricao }}</p>
                        <p class="card-text"><strong>Presente desejado:</strong> {{ $crianca->presente_desejado }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Nenhuma criança cadastrada ainda.</p>
        @endforelse
    </div>
</div>
@endsection
