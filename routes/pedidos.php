<?php

declare(strict_types=1);

use App\Controllers\Site\PedidosController;

return [
    [
        'method' => 'GET',
        'path' => '/pedidos',
        'action' => [
            PedidosController::class,
            'index',
        ],
    ]
];
