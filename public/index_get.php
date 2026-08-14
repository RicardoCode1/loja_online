<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$raizProjeto = dirname(__DIR__);

$pagina = $_GET['pagina'] ?? 'home';

$rotas = [
    'home' => $raizProjeto . '/views/loja/home.php',
    'admin' => $raizProjeto . '/views/admin/dashboard.php',
    'teste' => $raizProjeto . '/views/loja/teste.php',
    'alunos' => $raizProjeto . '/views/teste/alunos.php',
    'avaliacao' => $raizProjeto . '/views/teste/avaliacao.php',
    'contato' => $raizProjeto . '/views/teste/contato.php',
];

if (!array_key_exists($pagina, $rotas)) {
    http_response_code(404);

    require $raizProjeto . '/views/admin/erros/404.php';

    exit;
}

require $rotas[$pagina];
