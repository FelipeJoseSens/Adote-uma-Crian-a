<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natal Mágico - Faça uma criança feliz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Natal Mágico</h1>
                <p class="lead">Faça o Natal de uma criança mais especial</p>
                <div class="snowflakes">❄ ❄ ❄</div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container main-content">
        <section class="about-section">
            <div class="row align-items-center">
                <div class="col-md-6">
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

        <section class="cta-section text-center py-5">
            <h3 class="mb-4">Como você pode ajudar?</h3>
            <div class="d-flex justify-content-center flex-wrap">
                <a href="/conheca-nossas-criancas" class="btn btn-primary btn-lg mx-3 my-2">
                    <i class="fas fa-child me-2"></i>Conheça Nossas Crianças
                </a>
                <a href="/adote-uma-crianca" class="btn btn-success btn-lg mx-3 my-2">
                    <i class="fas fa-gift me-2"></i>Adote uma Criança
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container text-center">
            <p>© 2025 Natal Mágico - Todos os direitos reservados</p>
            <div class="social-icons">
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
