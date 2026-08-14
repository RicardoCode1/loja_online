<section class="py-5 bg-white">
    <?php foreach ($produtosDestaque as $produto): ?>

        <div class="card-produto">

            <h3>
                <?=
                htmlspecialchars(
                    $produto['nome'],
                    ENT_QUOTES,
                    'UTF-8'
                )
                ?>
            </h3>

            <p>
                R$
                <?=
                number_format(
                    (float) $produto['preco'],
                    2,
                    ',',
                    '.'
                )
                ?>
            </p>

        </div>

    <?php endforeach; ?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h3 fw-bold m-0">Produtos em Destaque</h2>
            <a href="produtos" class="btn btn-outline-primary btn-sm">Ver todos os produtos</a>
        </div>
        <div class="row g-4">
            <!-- Produto 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <span class="badge bg-danger badge-discount">15% OFF</span>
                        <img src="assets/img/produtos/notebook.jpg" alt="Notebook Essencial 15" onerror="this.src='https://via.placeholder.com/300x200?text=Notebook'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Informática</span>
                        <h3 class="card-title mt-1 mb-2">Notebook Essencial 15 Polegadas Core i5</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
                            <span class="text-muted small">(42)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old">R$ 3.500,00</span>
                            <div class="product-price-current">R$ 2.975,00</div>
                            <span class="product-installment">em até 10x de R$ 297,50 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/notebook-essencial-15" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Notebook Essencial 15 ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <span class="badge bg-danger badge-discount">10% OFF</span>
                        <img src="assets/img/produtos/smartphone.jpg" alt="Smartphone Connect" onerror="this.src='https://via.placeholder.com/300x200?text=Smartphone'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Celulares</span>
                        <h3 class="card-title mt-1 mb-2">Smartphone Connect 128GB Câmera Dupla</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
                            <span class="text-muted small">(18)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old">R$ 1.800,00</span>
                            <div class="product-price-current">R$ 1.620,00</div>
                            <span class="product-installment">em até 10x de R$ 162,00 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/smartphone-connect" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Smartphone Connect ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <img src="assets/img/produtos/fone.jpg" alt="Fone Bluetooth Air" onerror="this.src='https://via.placeholder.com/300x200?text=Fone'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Áudio</span>
                        <h3 class="card-title mt-1 mb-2">Fone Bluetooth Air TWS Cancelamento de Ruído</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                            <span class="text-muted small">(95)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old"></span>
                            <div class="product-price-current">R$ 299,00</div>
                            <span class="product-installment">em até 5x de R$ 59,80 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/fone-bluetooth-air" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Fone Bluetooth Air ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto 4 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <span class="badge bg-danger badge-discount">20% OFF</span>
                        <img src="assets/img/produtos/teclado.jpg" alt="Teclado Comfort Plus" onerror="this.src='https://via.placeholder.com/300x200?text=Teclado'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Acessórios</span>
                        <h3 class="card-title mt-1 mb-2">Teclado Comfort Plus Mecânico RGB</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
                            <span class="text-muted small">(30)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old">R$ 250,00</span>
                            <div class="product-price-current">R$ 200,00</div>
                            <span class="product-installment">em até 4x de R$ 50,00 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/teclado-confort-plus" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Teclado Comfort Plus ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto 5 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <img src="assets/img/produtos/mouse.jpg" alt="Mouse Sem Fio" onerror="this.src='https://via.placeholder.com/300x200?text=Mouse'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Acessórios</span>
                        <h3 class="card-title mt-1 mb-2">Mouse Sem Fio Ergonômico Silencioso</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
                            <span class="text-muted small">(12)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old"></span>
                            <div class="product-price-current">R$ 89,90</div>
                            <span class="product-installment">em até 3x de R$ 29,97 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/mouse-sem-fio" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Mouse Sem Fio ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto 6 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <span class="badge bg-danger badge-discount">5% OFF</span>
                        <img src="assets/img/produtos/monitor.jpg" alt="Monitor Full HD" onerror="this.src='https://via.placeholder.com/300x200?text=Monitor'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Informática</span>
                        <h3 class="card-title mt-1 mb-2">Monitor Full HD 27 Polegadas IPS 75Hz</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                            <span class="text-muted small">(54)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old">R$ 1.200,00</span>
                            <div class="product-price-current">R$ 1.140,00</div>
                            <span class="product-installment">em até 10x de R$ 114,00 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/monitor-full-hd" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Monitor Full HD ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto 7 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <img src="assets/img/produtos/caixa-som.jpg" alt="Caixa de Som Portátil" onerror="this.src='https://via.placeholder.com/300x200?text=Caixa+de+Som'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Áudio</span>
                        <h3 class="card-title mt-1 mb-2">Caixa de Som Portátil Prova d'Água Bluetooth</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
                            <span class="text-muted small">(21)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old"></span>
                            <div class="product-price-current">R$ 199,00</div>
                            <span class="product-installment">em até 4x de R$ 49,75 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/caixa-de-som-portatil" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Caixa de Som Portátil ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto 8 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <div class="product-img-wrapper">
                        <span class="badge bg-danger badge-discount">25% OFF</span>
                        <img src="assets/img/produtos/headset.jpg" alt="Headset Gamer" onerror="this.src='https://via.placeholder.com/300x200?text=Headset'">
                    </div>
                    <div class="card-body">
                        <span class="text-muted small">Games</span>
                        <h3 class="card-title mt-1 mb-2">Headset Gamer Surround 7.1 com Microfone</h3>
                        <div class="mb-2">
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
                            <span class="text-muted small">(67)</span>
                        </div>
                        <div class="mt-auto">
                            <span class="product-price-old">R$ 400,00</span>
                            <div class="product-price-current">R$ 300,00</div>
                            <span class="product-installment">em até 6x de R$ 50,00 sem juros</span>
                            <div class="d-flex gap-2 mt-3">
                                <a href="produto/headset-gamer" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Headset Gamer ao carrinho"><i class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>