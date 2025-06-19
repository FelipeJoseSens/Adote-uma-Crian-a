<div class="d-flex justify-content-end mb-3">
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary mx-1">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-secondary mx-1">Entrar</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-success mx-1">Registrar</a>
            @endif
        @endauth
    @endif
</div>
