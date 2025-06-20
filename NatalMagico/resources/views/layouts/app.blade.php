<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natal Mágico - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">🎄 Natal Mágico</a>
                <div class="navbar-nav me-auto">
                    <a class="nav-link" href="{{ route('criancas.index') }}">👧👦 Conheça Nossas Crianças</a>
                    <a class="nav-link" href="/adote-uma-crianca">🎁 Adote uma Criança</a>
                    @auth
                        <a class="nav-link" href="{{ route('admin.criancas.create') }}">+ Cadastrar Criança</a>
                    @endauth
                </div>
                <div class="navbar-nav ms-auto">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                        <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                    @else
                        <span class="navbar-text me-3">Olá, {{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-light">Logout</button>
                        </form>
                    @endguest
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
