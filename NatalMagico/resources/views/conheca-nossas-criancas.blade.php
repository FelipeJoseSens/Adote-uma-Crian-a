<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça Nossas Crianças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Conheça Nossas Crianças</h1>
        <div class="row">
            @foreach($criancas as $crianca)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($crianca->foto)
                    {{-- Alteração aqui para um 'alt' text mais descritivo --}}
                    <img src="{{ asset('storage/' . $crianca->foto) }}" class="card-img-top" alt="Foto de {{ $crianca->nome }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $crianca->nome }} ({{ $crianca->idade }} anos)</h5>
                        <p class="card-text">{{ $crianca->descricao }}</p>
                        <p class="text-success"><strong>Deseja ganhar:</strong> {{ $crianca->presente_desejado }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
