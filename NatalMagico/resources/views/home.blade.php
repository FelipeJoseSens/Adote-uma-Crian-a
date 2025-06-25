@extends('layouts.app')

@section('title', 'Faça uma criança feliz')

@section('content')

<div class="px-4 py-5 my-5 text-center rounded-3" style="background: linear-gradient(135deg, #1d3557, #457b9d);">
    <div style="position: relative; z-index: 1;">
        <h1 class="display-5 fw-bold text-white">Natal Mágico</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white">Faça o Natal de uma criança mais especial. ❄ ❄ ❄</p>
        </div>
    </div>
</div>

<main class="container">
    <section class="about-section mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <img src="https://images.unsplash.com/photo-1516589091380-5d6015f4ae6b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                     alt="Crianças felizes"
                     class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2>Sobre o Projeto</h2>
                <p>O Natal Mágico conecta pessoas de bom coração a crianças que merecem um Natal mais feliz. Conheça histórias emocionantes e ajude a realizar sonhos.</p>
                <p>Mais de 500 crianças já foram atendidas pelo nosso projeto desde 2015.</p>
            </div>
        </div>
    </section>

    <section class="cta-section text-center py-5 bg-light rounded-3 shadow-sm">
        <h3 class="mb-4">Como você pode ajudar?</h3>
        <div class="d-flex justify-content-center flex-wrap gap-3">
            <a href="/conheca-nossas-criancas" class="btn btn-primary btn-lg">
                <i class="fas fa-child me-2"></i>Conheça Nossas Crianças
            </a>
            <a href="/adote-uma-crianca" class="btn btn-success btn-lg">
                <i class="fas fa-gift me-2"></i>Adote uma Criança
            </a>
        </div>
    </section>
</main>

<footer class="py-4 mt-5">
    <div class="container text-center">
        <p>© 2025 Natal Mágico - Todos os direitos reservados</p>
    </div>
</footer>

{{-- Referência para ícones, se não estiver global --}}
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush
