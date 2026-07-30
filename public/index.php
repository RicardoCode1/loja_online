<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Dotenv\Dotenv;
$raizProjeto = dirname(__DIR__);
$dotenv = Dotenv::createImmutable($raizProjeto);
$dotenv->safeLoad();
$configBanco = require $raizProjeto . '/config/database.php';
$statusBanco = 'Não conectado';
$classeStatus = 'warning';
$mensagemBanco = 'A conexão ainda não foi testada.';

try {
    $dsn = sprintf(
        'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
        $configBanco['host'],
        $configBanco['port'],
        $configBanco['database']
    );
    $pdo = new PDO(
        $dsn,
        $configBanco['username'],
        $configBanco['password'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
    $statusBanco = 'Conexão realizada';
    $classeStatus = 'success';
    $mensagemBanco = 'PHP conectado ao banco loja_virtual_db.';
} catch (PDOException $erro) {
    $statusBanco = 'Falha na conexão';
    $classeStatus = 'danger';
    $mensagemBanco = 'Verifique o MySQL e as configurações do arquivo .env.';
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnóstico — Loja Virtual</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Loja Virtual</a>
        </div>
    </nav>
    <header class="py-5 bg-primary text-white">
        <div class="container">
            <h1>Ambiente de desenvolvimento</h1>
            <p class="mb-0">
                Página de diagnóstico do projeto da UC12.
            </p>
        </div>
    </header>
    <main class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5">PHP</h2>
                        <p class="mb-0">
                            Versão:
                            <strong>
                                <?= htmlspecialchars(PHP_VERSION) ?>
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5">Sistema operacional</h2>
                        <p class="mb-0">
                            <?= htmlspecialchars(PHP_OS_FAMILY) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5">Ambiente</h2>
                        <p class="mb-0">
                            <?= htmlspecialchars($_ENV['APP_ENV'] ?? 'local') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-<?= $classeStatus ?> mt-4">
            <h2 class="h5"><?= htmlspecialchars($statusBanco) ?></h2>
            <p class="mb-0">
                <?= htmlspecialchars($mensagemBanco) ?>
            </p>
        </div>
    </main>
    <footer class="border-top py-4">
        <div class="container text-center text-secondary">
            Projeto Loja Virtual — UC12
        </div>
    </footer>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>