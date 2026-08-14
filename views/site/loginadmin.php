<?php

declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoManiac - Login Administrativo</title>
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
    </style>
</head>

<body>

    <div class="bg-glow"></div>

    <!-- Header / Navbar Minimalista -->
    <header class="container py-4">
        <nav class="navbar navbar-dark">
            <div class="container-fluid px-0">
                <a class="navbar-brand fs-4 fw-bold brand-title" href="<?= BASE_URL ?>/">
                    <i class="bi bi-cpu-fill me-2"></i>InfoManiac
                </a>
                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-3 py-2 rounded-pill">
                    <i class="bi bi-shield-lock-fill me-1"></i>
                    Área Restrita
                </span>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="container my-auto py-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-6 col-lg-5 col-xl-4">

                <!-- Ícone Destaque -->
                <div class="mb-4">
                    <div class="d-inline-flex p-4 rounded-circle bg-primary bg-opacity-15 text-primary border border-primary border-opacity-25 shadow-lg">
                        <i class="bi bi-person-lock display-4"></i>
                    </div>
                </div>

                <!-- Título -->
                <h1 class="h3 fw-bold mb-2 text-light">Painel <span class="brand-title">Admin</span></h1>
                <p class="small mb-4" style="color: #94a3b8 !important;">
                    Entre com suas credenciais para gerenciar a plataforma da <strong class="text-light">InfoManiac</strong>.
                </p>

                <?php if (isset($erro) && $erro !== null): ?>
                    <div class="alert alert-danger border-0 bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 small text-start mb-4" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <?= htmlspecialchars((string) $erro, ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php endif; ?>

                <!-- Formulário de Login -->
                <div class="card card-custom p-4 p-md-4 shadow-sm text-start mb-4">
                    <form action="<?= BASE_URL ?>/login-admin" method="post">

                        <input type="hidden" name="_token" value="<?= htmlspecialchars($csrfToken ?? '', ENT_QUOTES, 'UTF-8') ?>">

                        <div class="mb-3">
                            <label for="email" class="form-label small text-secondary" style="color: #94a3b8 !important;">E-mail Administrativo</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-end-0 border-secondary text-light">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" id="email" name="email" class="form-control border-start-0 border-secondary ps-0" value="<?= htmlspecialchars((string) ($email ?? ''), ENT_QUOTES, 'UTF-8') ?>" placeholder="admin@infomaniac.com" autocomplete="username" required autofocus>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label small text-secondary" style="color: #94a3b8 !important;">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-end-0 border-secondary text-light">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input type="password" id="senha" name="senha" class="form-control border-start-0 border-secondary ps-0" placeholder="••••••••" autocomplete="current-password" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4 small">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input bg-transparent border-secondary" id="remember">
                                <label class="form-check-label text-secondary" style="color: #94a3b8 !important;" for="remember">Lembrar-me</label>
                            </div>
                            <a href="#" class="text-decoration-none text-primary">Esqueceu a senha?</a>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-semibold py-2">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Acessar Painel
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Voltar ao site -->
                <div>
                    <a href="<?= BASE_URL ?>/" class="text-decoration-none small text-secondary" style="color: #94a3b8 !important;">
                        <i class="bi bi-arrow-left me-1"></i> Voltar para a página principal
                    </a>
                </div>

            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="container py-4 text-center small border-top border-secondary border-opacity-10 mt-auto" style="color: #94a3b8 !important;">
        <p class="mb-0">&copy; 2026 InfoManiac. Todos os direitos reservados. Painel de Controle Seguro.</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>