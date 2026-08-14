<?php

declare(strict_types=1);

$tituloHeader = $tituloHeader
    ?? 'Encontre tudo o que precisa';

$textoHeader = $textoHeader
    ?? 'Produtos selecionados para você.';

?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online | Produtos, ofertas e tecnologia</title>
    <meta name="description" content="Encontre produtos de informática, celulares, acessórios, games e ofertas especiais em nossa loja online.">
    <meta name="keywords" content="loja online, tecnologia, informática, celulares, ofertas, ecommerce">
    <meta name="author" content="Loja Online">

    <!-- Open Graph Básico -->
    <meta property="og:title" content="Loja Online | Produtos, ofertas e tecnologia">
    <meta property="og:description" content="Encontre produtos de informática, celulares, acessórios, games e ofertas especiais em nossa loja online.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://localhost/loja_online/public/">
    <meta property="og:image" content="assets/img/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Base URL -->
    <base href="/loja_online/public/">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS Personalizado -->
    <style>
        :root {
            --bs-primary: #0d6efd;
            --bs-primary-rgb: 13, 110, 253;
            --bg-light-gray: #f8f9fa;
        }

        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
            color: #333333;
            background-color: #ffffff;
        }

        /* Top Bar */
        .top-bar {
            background-color: #1a1d20;
            color: #adb5bd;
            font-size: 0.875rem;
        }

        .top-bar a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .top-bar a:hover {
            color: #ffffff;
        }

        /* Navbar Principal */
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--bs-primary) !important;
        }

        .search-form .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .search-form .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        /* Banner Principal (Hero) */
        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: #ffffff;
            padding: 80px 0;
        }

        .hero-section h1 {
            font-weight: 800;
        }

        /* Benefícios */
        .benefit-card {
            border: none;
            background-color: var(--bg-light-gray);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .08);
        }

        /* Categorias em Destaque */
        .category-card {
            border: none;
            overflow: hidden;
            border-radius: 0.5rem;
            transition: transform 0.3s ease;
        }

        .category-card:hover {
            transform: scale(1.03);
        }

        .category-img-wrapper {
            position: relative;
            height: 180px;
            background-color: #e9ecef;
        }

        .category-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 20px 15px 15px;
            color: #ffffff;
        }

        /* Produtos */
        .product-card {
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            transition: box-shadow 0.2s ease, transform 0.2s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            transform: translateY(-3px);
        }

        .product-img-wrapper {
            position: relative;
            height: 200px;
            background-color: #f8f9fa;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            overflow: hidden;
        }

        .product-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge-discount {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .product-card .card-body {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-card .card-title {
            font-size: 1rem;
            font-weight: 600;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-price-old {
            font-size: 0.85rem;
            color: #6c757d;
            text-decoration: line-through;
        }

        .product-price-current {
            font-size: 1.25rem;
            font-weight: 700;
            color: #198754;
        }

        .product-installment {
            font-size: 0.8rem;
            color: #6c757d;
        }

        /* Banner de Oferta */
        .offer-banner-section {
            background: linear-gradient(135deg, #212529 0%, #343a40 100%);
            color: #ffffff;
            border-radius: 1rem;
        }

        /* Newsletter */
        .newsletter-section {
            background-color: var(--bg-light-gray);
        }

        /* Rodapé */
        footer {
            background-color: #212529;
            color: #adb5bd;
            font-size: 0.9rem;
        }

        footer h5 {
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        footer a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        footer a:hover {
            color: #ffffff;
        }

        .payment-icons i {
            font-size: 1.75rem;
            margin-right: 0.5rem;
            color: #ffffff;
        }
    </style>
</head>

<body>


    <!-- Navbar -->
    <?php require_once APP_ROOT . '/views/componentes/nav/nav.php'; ?>
    <main>
        <!-- Container centralizado com espaçamento seguro nas laterais -->
<div class="container px-4 px-lg-5 mx-auto my-4">
    <div class="row g-4 justify-content-center"> 

        <?php foreach ($produtos as $produto): ?>
            <!-- col-6 (2 por linha no celular), col-md-4 (3 por linha no PC) -->
            <div class="col-6 col-md-4 col-lg-4"> 
                <div class="card card-custom h-100 p-3 p-md-4 d-flex flex-column justify-content-between shadow-sm">
                    
                    <div>
                        <!-- Imagem do Produto -->
                        <?php if (!empty($produto['imagem'])): ?>
                            <div class="text-center mb-3">
                                <img src="<?= htmlspecialchars($produto['imagem'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>" class="img-fluid rounded" style="max-height: 150px; object-fit: contain;">
                            </div>
                        <?php endif; ?>

                        <!-- Nome do Produto em Azul Cor do Mar -->
                        <h4 class="fw-semibold mb-2 fs-6 fs-md-5" style="color: #00b4d8 !important;">
                            <?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>
                        </h4>
                    </div>

                    <div class="mt-3">
                        <!-- Preço -->
                        <div class="mb-3">
                            <span class="fs-5 fs-md-4 fw-bold brand-title">
                                R$ <?= number_format((float) $produto['preco'], 2, ',', '.') ?>
                            </span>
                        </div>

                        <!-- Botão de Compra -->
                        <div class="d-grid">
                            <a href="produto.php?id=<?= $produto['id'] ?>" class="btn btn-primary fw-semibold py-2 btn-sm">
                                <i class="bi bi-cart-plus-fill me-1"></i><span class="d-none d-sm-inline">Comprar</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
    </main>
    <!-- Rodapé -->
    <?php require_once APP_ROOT . '/views/layouts/site/footer.php'; ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>