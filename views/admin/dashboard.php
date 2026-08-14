<?php

declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrativo - InfoManiac</title>
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
    </style>
</head>

<body>

    <div class="bg-glow"></div>

    <!-- Header / Navbar -->
    <header class="container py-4">
        <nav class="navbar navbar-dark">
            <div class="container-fluid px-0">
                <a class="navbar-brand fs-4 fw-bold brand-title" href="<?= BASE_URL ?>/admin">
                    <i class="bi bi-cpu-fill me-2"></i>InfoManiac
                </a>

                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-3 py-2 rounded-pill d-none d-sm-inline-block">
                        <i class="bi bi-shield-fill-check me-1"></i>
                        Painel Admin
                    </span>

                    <form action="<?= BASE_URL ?>/logout-admin" method="post" class="m-0">
                        <input type="hidden" name="_token" value="<?= htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8') ?>">
                        <button class="btn btn-outline-light btn-sm px-3 py-2 rounded-pill border-secondary border-opacity-50" type="submit">
                            <i class="bi bi-box-arrow-right me-1" aria-hidden="true"></i> Sair
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal / Dashboard -->
    <main class="container my-auto py-4">

        <!-- Boas-vindas -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card card-custom p-4 p-md-4 shadow-sm">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                        <div>
                            <p class="text-secondary small mb-1" style="color: #94a3b8 !important;">Administração Geral</p>
                            <h1 class="h3 fw-bold text-light mb-1">Dashboard <span class="brand-title">InfoManiac</span></h1>
                            <p class="mb-0 small" style="color: #94a3b8 !important;">
                                Bem-vindo de volta, <strong class="text-light"><?= htmlspecialchars((string) $usuarioAdmin['nome'], ENT_QUOTES, 'UTF-8') ?></strong>.
                            </p>
                        </div>
                        <div>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-3 py-2">
                                <i class="bi bi-circle-fill text-success small me-1"></i> Sessão Ativa
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicadores / Cards -->
        <div class="row g-4 mb-4">
            <?php foreach ($indicadores as $nome => $valor): ?>
                <div class="col-sm-6 col-lg-3">
                    <article class="card card-custom shadow-sm h-100 p-3">
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h2 class="h6 text-uppercase text-secondary mb-0" style="color: #94a3b8 !important; font-size: 0.8rem; letter-spacing: 0.5px;">
                                    <?= htmlspecialchars(ucfirst($nome), ENT_QUOTES, 'UTF-8') ?>
                                </h2>
                                <div class="p-2 rounded bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                            </div>
                            <p class="display-6 fw-bold mb-0 text-light">
                                <?= (int) $valor ?>
                            </p>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Seção de Perfil do Usuário Conectado -->
        <section class="card card-custom p-4 shadow-sm">
            <div class="card-body p-0">
                <div class="d-flex align-items-center mb-3">
                    <div class="p-2 rounded-circle bg-primary bg-opacity-15 text-primary border border-primary border-opacity-25 me-3">
                        <i class="bi bi-person-badge fs-4"></i>
                    </div>
                    <h2 class="h5 mb-0 text-light">Usuário Conectado</h2>
                </div>

                <div class="row g-3 small" style="color: #94a3b8 !important;">
                    <div class="col-md-6">
                        <div class="p-3 rounded bg-white bg-opacity-5 border border-secondary border-opacity-10">
                            <strong class="text-light d-block mb-1"><i class="bi bi-person me-2 text-primary"></i>Nome Completo:</strong>
                            <span><?= htmlspecialchars((string) $usuarioAdmin['nome'], ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded bg-white bg-opacity-5 border border-secondary border-opacity-10">
                            <strong class="text-light d-block mb-1"><i class="bi bi-envelope me-2 text-primary"></i>E-mail Cadastrado:</strong>
                            <span><?= htmlspecialchars((string) $usuarioAdmin['email'], ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Rodapé -->
    <footer class="container py-4 text-center small border-top border-secondary border-opacity-10 mt-auto" style="color: #94a3b8 !important;">
        <p class="mb-0">&copy; 2026 InfoManiac. Todos os direitos reservados. Painel de Controle Seguro.</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>