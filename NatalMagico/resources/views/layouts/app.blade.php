<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natal Mágico - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">🎄 Natal Mágico</a>
                <div class="navbar-nav">
                    <a class="nav-link" href="/conheca-nossas-criancas">👧👦 Conheça Nossas Crianças</a>
                    <a class="nav-link" href="/adote-uma-crianca">🎁 Adote uma Criança</a>
                    {{-- Link para cadastrar criança adicionado --}}
                    <a class="nav-link" href="{{ route('criancas.create') }}">+ Cadastrar Criança</a>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
