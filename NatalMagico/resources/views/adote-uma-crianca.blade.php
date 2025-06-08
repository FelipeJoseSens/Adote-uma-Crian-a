@extends('layouts.app')

@section('title', 'Adote uma Criança')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center mb-0">Adote uma Criança</h3>
            </div>

            @if($crianca)
            <div class="card-body text-center">
                <img src="{{ asset('storage/' . $crianca->foto) }}"
                     class="img-fluid rounded-circle mb-3"
                     style="width: 200px; height: 200px; object-fit: cover;"
                     alt="{{ $crianca->nome }}">

                <h2>{{ $crianca->nome }}, {{ $crianca->idade }} anos</h2>
                <p class="lead">{{ $crianca->descricao }}</p>

                <div class="alert alert-success mt-4">
                    <h4>🎁 Presente Desejado:</h4>
                    <p class="h5">{{ $crianca->presente_desejado }}</p>
                </div>

                <a href="/adote-uma-crianca" class="btn btn-primary btn-lg mt-3">
                    🔄 Sortear Outra Criança
                </a>
            </div>
            @else
            <div class="card-body text-center">
                <div class="alert alert-warning">
                    Nenhuma criança cadastrada no momento.
                </div>
                <a href="/" class="btn btn-primary">Voltar</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
