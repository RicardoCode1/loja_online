<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoManiac - Em Construção</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0b0f19;
            color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-x: hidden;
        }

        .bg-glow {
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(13, 110, 253, 0.15) 0%, rgba(11, 15, 25, 0) 70%);
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
        }

        .brand-title {
            font-weight: 800;
            letter-spacing: -1px;
            background: linear-gradient(45deg, #0d6efd, #0dcaf0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-custom {
            background-color: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.2);
            color: #ffffff !important;
        }

        .form-control::placeholder {
            color: #adb5bd !important;
            opacity: 1;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.08);
            border-color: #0d6efd;
            color: #fff !important;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .social-icon {
            width: 45px;
            height: 45px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            transition: all 0.3s ease;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-icon:hover {
            background: #0d6efd;
            color: #fff;
            transform: translateY(-3px);
            border-color: #0d6efd;
        }
    </style>
</head>

<body>

    <div class="bg-glow"></div>

    <!-- Header / Navbar Minimalista -->
    <header class="container py-4">
        <nav class="navbar navbar-dark">
            <div class="container-fluid px-0">
                <a class="navbar-brand fs-4 fw-bold brand-title" href="#">
                    <i class="bi bi-cpu-fill me-2"></i>InfoManiac
                </a>
                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-3 py-2 rounded-pill">
                    <span class="spinner-grow spinner-grow-sm me-1" role="status" aria-hidden="true"></span>
                    Em Breve
                </span>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="container my-auto py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-xl-7">

                <!-- Ícone Destaque -->
                <div class="mb-4">
                    <div class="d-inline-flex p-4 rounded-circle bg-primary bg-opacity-15 text-primary border border-primary border-opacity-25 shadow-lg">
                        <i class="bi bi-tools display-4"></i>
                    </div>
                </div>

                <!-- Título e Subtítulo -->
                <h1 class="display-4 fw-bold mb-3 text-light">Estamos construindo algo <span class="brand-title">incrível</span> para você!</h1>
                <p class="lead text-secondary mb-5" style="color: #94a3b8 !important;">
                    A <strong class="text-light">InfoManiac</strong> será o seu novo destino definitivo para tecnologia de ponta, hardware, acessórios e inovação. Estamos ajustando os últimos detalhes para oferecer a melhor experiência.
                </p>

                <!-- Formulário de Captura de Lead / Aviso Prévio -->
                <div class="card card-custom p-4 p-md-5 shadow-sm mb-5">
                    <h5 class="fw-semibold mb-3 text-light">Seja o primeiro a saber quando lançarmos</h5>
                    <p class="small mb-4" style="color: #94a3b8 !important;">Cadastre seu e-mail para garantir vantagens exclusivas e cupons de desconto de inauguração.</p>

                    <form class="row g-3 justify-content-center">
                        <div class="col-12 col-sm-8">
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-end-0 border-secondary text-light">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" class="form-control border-start-0 border-secondary ps-0" placeholder="Digite seu melhor e-mail..." required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 d-grid">
                            <button type="submit" class="btn btn-primary fw-semibold py-2">
                                <i class="bi bi-bell-fill me-2"></i>Avise-me
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Redes Sociais e Contato -->
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="social-icon" title="Instagram">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="#" class="social-icon" title="Twitter / X">
                        <i class="bi bi-twitter-x fs-5"></i>
                    </a>
                    <a href="#" class="social-icon" title="Discord">
                        <i class="bi bi-discord fs-5"></i>
                    </a>
                    <a href="#" class="social-icon" title="E-mail de Contato">
                        <i class="bi bi-envelope-at-fill fs-5"></i>
                    </a>
                </div>

            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="container py-4 text-center small border-top border-secondary border-opacity-10 mt-auto" style="color: #94a3b8 !important;">
        <p class="mb-0">&copy; 2026 InfoManiac. Todos os direitos reservados. Preparando o setup perfeito.</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>