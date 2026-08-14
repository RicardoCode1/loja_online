<?php

declare(strict_types=1);

$tituloPagina = $tituloPagina
    ?? 'Loja Online';

$descricaoPagina = $descricaoPagina
    ?? 'Loja Online';

$baseUrl = defined('BASE_URL')
    ? BASE_URL
    : '';

?>
<header class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <span class="badge bg-light text-primary mb-3 px-3 py-2 rounded-pill fw-semibold">Novidade 2026</span>
                <h1 class="display-4 fw-bold mb-3">Tecnologia e Inovação ao seu Alcance</h1>
                <p class="lead mb-4">Descubra nossa seleção exclusiva de eletrônicos, informática e acessórios com os melhores preços do mercado e entrega rápida.</p>
                <div class="d-flex gap-3">
                    <a href="produtos" class="btn btn-light btn-lg px-4 fw-semibold">Comprar agora</a>
                    <a href="ofertas" class="btn btn-outline-light btn-lg px-4">Ver ofertas</a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="p-4 bg-white bg-opacity-10 rounded-4 border border-light border-opacity-25">
                    <i class="bi bi-laptop display-1 text-white mb-2"></i>
                    <p class="text-white m-0 fw-medium">As melhores marcas e lançamentos globais</p>
                </div>
            </div>
        </div>
    </div>
</header>