<?php

declare(strict_types=1);

$rotaAtual = $rotaAtual ?? '';

?>
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand" href="">Loja Online</a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produtos">Produtos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="categorias" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu shadow border-0">
                        <?php foreach ($categorias as $categoria): ?>

                            <li>

                                <a
                                    class="dropdown-item"
                                    href="<?=
                                            BASE_URL
                                            ?>/categoria?cat=<?=
                                                                urlencode(
                                                                    $categoria['id_seguro']
                                                                )
                                                                ?>">

                                    <?=
                                    htmlspecialchars(
                                        $categoria['nome'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    )
                                    ?>

                                </a>

                            </li>

                        <?php endforeach; ?>



                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item fw-bold" href="categorias">Ver todas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ofertas">Ofertas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="ajuda" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ajuda
                    </a>
                    <ul class="dropdown-menu shadow border-0">
                        <li><a class="dropdown-item" href="ajuda/?a=1">Central de ajuda</a></li>
                        <li><a class="dropdown-item" href="ajuda/?a=2">Perguntas frequentes</a></li>
                        <li><a class="dropdown-item" href="ajuda/?a=3">Rastrear pedido</a></li>
                        <li><a class="dropdown-item" href="ajuda/?a=4">Trocas e devoluções</a></li>
                        <li><a class="dropdown-item" href="contato">Fale conosco</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Formulário de Pesquisa -->
            <form class="d-flex search-form me-lg-3 mb-3 mb-lg-0" role="search" method="GET" action="buscar">
                <input class="form-control" type="search" name="q" placeholder="Buscar produtos..." aria-label="Pesquisar produtos" required>
                <button class="btn btn-outline-primary" type="submit" aria-label="Pesquisar"><i class="bi bi-search"></i></button>
            </form>

            <!-- Ações do Usuário e Carrinho -->
            <div class="d-flex align-items-center">
                <div class="dropdown me-3">
                    <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-5 me-1"></i> <span class="d-none d-xl-inline">Conta</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                        <li><a class="dropdown-item" href="clienteL">Entrar</a></li>
                        <li><a class="dropdown-item" href="clientec">Criar conta</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="pedidos">Meus pedidos</a></li>
                    </ul>
                </div>

                <a href="carrinho" class="btn btn-primary position-relative d-flex align-items-center" aria-label="Carrinho de compras">
                    <i class="bi bi-cart3 fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                        <span class="visually-hidden">itens no carrinho</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>