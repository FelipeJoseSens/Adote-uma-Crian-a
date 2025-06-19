@extends('layouts.app')

@section('title', 'Conheça Nossas Crianças')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Conheça Nossas Crianças</h1>
    <div class="row">
        @foreach($criancas as $crianca)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                @if($crianca->foto)
                <img src="{{ asset('storage/' . $crianca->foto) }}"
                     class="card-img-top"
                     style="height: 200px; object-fit: cover;"
                     alt="{{ $crianca->nome }}">
                @endif
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $crianca->nome }} <small class="text-muted">({{ $crianca->idade }} anos)</small></h5>
                    <p class="card-text flex-grow-1">{{ $crianca->descricao }}</p>
                    <div class="mt-auto">
                        <div class="alert alert-success mb-0">
                            <strong>🎁 Deseja ganhar:</strong> {{ $crianca->presente_desejado }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
