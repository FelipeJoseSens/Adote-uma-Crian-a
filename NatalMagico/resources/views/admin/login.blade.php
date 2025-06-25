@extends('layouts.app')

@section('title', 'Acesso do Administrador')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h3 class="text-center mb-0">Acesso Restrito</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código de Administrador</label>
                        <input type="password" name="codigo" id="codigo" class="form-control @error('codigo') is-invalid @enderror" required autofocus>
                        @error('codigo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Liberar Acesso</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
