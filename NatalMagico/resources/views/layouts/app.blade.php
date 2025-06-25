<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natal Mágico - @yield('title', 'Adote uma Criança')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">🎄 Natal Mágico</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav me-auto">
                        <a class="nav-link" href="/conheca-nossas-criancas">👧👦 Conheça Nossas Crianças</a>
                        <a class="nav-link" href="/adote-uma-crianca">🎁 Adote uma Criança</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        @if(session('is_admin'))
                            <a class="nav-link btn btn-sm btn-danger text-white" href="{{ route('admin.logout') }}">Sair do Modo Administrador</a>
                        @else
                            <a class="nav-link" href="{{ route('admin.login') }}">🔒 Modo Administrador</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        @if(session('success'))
            <div class="alert alert-success shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
