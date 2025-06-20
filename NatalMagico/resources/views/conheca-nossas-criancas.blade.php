@extends('layouts.app')

@section('title', 'Conheça Nossas Crianças')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Conheça Nossas Crianças</h1>
    <div class="row">
        @foreach($criancas as $crianca)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($crianca->foto)
                <img src="{{ asset('storage/' . $crianca->foto) }}" class="card-img-top" alt="Foto de {{ $crianca->nome }}" style="height: 250px; object-fit: cover;">
                @endif
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $crianca->nome }} ({{ $crianca->idade }} anos)</h5>
                    <p class="card-text">{{ $crianca->descricao }}</p>
                    <div class="mt-auto">
                        <p class="text-success mb-0"><strong>Deseja ganhar:</strong> {{ $crianca->presente_desejado }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
